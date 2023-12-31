import pandas as pd

df = pd.read_csv('pandas\edu_bigdata_imp1.csv', encoding = 'big5', low_memory = False)
df_count = df['dp002_verb_display_zh_TW'].dropna().value_counts()

print(df_count.head(3))