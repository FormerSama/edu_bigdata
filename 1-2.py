import pandas as pd

df = pd.read_csv('pandas\edu_bigdata_imp1.csv', encoding = 'big5', low_memory = False)
df_filtered = df[df['PseudoID'] == 39]
df_filtered = df_filtered.dropna(subset = ['dp001_question_sn'])
unique_value = df_filtered['dp001_question_sn'].unique()
print(len(unique_value))

