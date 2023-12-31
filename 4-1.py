import pandas as pd

df = pd.read_csv('pandas\edu_bigdata_imp1.csv', encoding = 'big5', low_memory = False)
df_filtered = df['dp001_review_sn']
df_count = df_filtered.value_counts()
print(df_count.head(1))
