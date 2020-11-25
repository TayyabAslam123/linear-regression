import numpy as np
import pandas as pd
import pickle
import sys
import os
import joblib
from sklearn.linear_model import LinearRegression

os.environ["PYTHONPATH"] ='C:\\Users\\umer\\AppData\\Local\\Programs\\Python\\Python37\\Lib'

model = joblib.load('filename.pkl')
y = np.array([[float(sys.argv[1]), float(sys.argv[2]), float(sys.argv[3]), float(sys.argv[4]), float(sys.argv[5]), float(sys.argv[6])]])
y.reshape(1, -1)
x = model.predict(y)
print(x[0])




