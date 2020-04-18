import os
import sys
os.environ['GOOGLE_APPLICATION_CREDENTIALS'] = '/home/pi/Desktop/trusty-fuze-274320-39a560926e65.json'
# TODO(developer): Uncomment and set the following variables
project_id = 'trusty-fuze-274320'
compute_region = 'us-central1'
model_display_name = 'PassMyBill_20200415035916'

inputs = {'Amount': float(sys.argv[1]), 'ClientName': sys.argv[2], 'IssueCode': sys.argv[3], 'Leaning': sys.argv[4], 'LobbyistNames': sys.argv[5], 'Majority': sys.argv[6], 'RegistrantName': sys.argv[7]}
feature_importance=int(sys.argv[8])

#"['COOPER, GEORGE', 'WELCH, Wesley Ryan']"
from google.cloud import automl_v1beta1 as automl

client = automl.TablesClient(project=project_id, region=compute_region)

if feature_importance:
    response = client.predict(
        model_display_name=model_display_name,
        inputs=inputs,
        feature_importance=True,
    )
else:
    response = client.predict(
        model_display_name=model_display_name, inputs=inputs
    )

for result in response.payload:
    print(
        "Predicted totalYes: {}".format(result.tables.value.number_value)
    )
    print("Prediction Interval:")
    print("Start: " + str(result.tables.prediction_interval.start))
    print("End: " + str(result.tables.prediction_interval.end))

    if feature_importance:
        # get features of top importance
        feat_list = [
            (column.feature_importance, column.column_display_name)
            for column in result.tables.tables_model_column_info
        ]
        feat_list.sort(reverse=True)
        if len(feat_list) < 10:
            feat_to_show = len(feat_list)
        else:
            feat_to_show = 10

        print("Features of top importance:")
        for feat in feat_list[:feat_to_show]:
            print(feat)
