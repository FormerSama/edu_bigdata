import pandas as pd

df = pd.read_csv('pandas\edu_bigdata_imp1.csv', encoding = 'big5', low_memory = False)
df_filtered = df[df['PseudoID'] == 281]
unique_value = df_filtered[['dp001_video_item_sn', 'dp001_indicator']].drop_duplicates()
print(unique_value)
