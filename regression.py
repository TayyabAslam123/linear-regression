import numpy as np
import pandas as pd
import pickle
import matplotlib.pyplot as plt  # To visualize
from sklearn.metrics import accuracy_score
import joblib
from sklearn.linear_model import LinearRegression

data = pd.read_csv("C:\\user driv\\areej\\data mining\\pycharm\\linear_regression\\data.csv")
print(data)
model = LinearRegression()
model.fit(data[['use_type','location','category','desc_length','product','funds_required']], data.percentage_raised)
print(model.coef_)
Y_pred = model.predict([[0,1,10,32,1,85314]])  # make predictions
print('prediction:',Y_pred)
r_sq = model.score(data[['use_type','location','category','desc_length','product','funds_required']], data.percentage_raised)
print('coefficient of determination:', r_sq)

print('intercept:', model.intercept_)

print('slope:', model.coef_)
# Save the trained model as a pickle string.
saved_model = pickle.dumps(model)
joblib.dump(model, 'filename.pkl')