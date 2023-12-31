import pandas as pd

df = pd.read_csv('pandas\edu_bigdata_imp1.csv', encoding = 'big5', low_memory = False)
df_filtered = df[df['PseudoID'] == 71]
df_filtered = df_filtered[['dp001_review_start_time', 'dp001_review_end_time']].dropna()
df_filtered['dp001_review_start_time'] = pd.to_datetime(df_filtered['dp001_review_start_time'])
df_filtered['dp001_review_start_time'] = df_filtered['dp001_review_start_time'].dt.date
df_filtered['dp001_review_end_time'] = pd.to_datetime(df_filtered['dp001_review_end_time'])
df_filtered['dp001_review_end_time'] = df_filtered['dp001_review_end_time'].dt.date
unique_value = df_filtered[['dp001_review_start_time']].drop_duplicates()
print(unique_value)