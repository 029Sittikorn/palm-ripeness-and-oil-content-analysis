from cgitb import html, text
from traceback import print_tb
import tensorflow
from tensorflow import keras
import numpy as np
import cv2



np.set_printoptions(suppress=False)
# Load the model
model = tensorflow.keras.models.load_model('keras_model.h5')
data = np.ndarray(shape=(1, 224, 224, 3), dtype=np.float32)
# Replace this with the path to your image
img = cv2.imread('img_test\IMG_20220301_111026.jpg')
#resize the image to a 224x224 with the same strategy as in TM2:
#resizing the image to be at least 224x224 and then cropping from the center
img = cv2.resize(img,(224, 224))

#turn the image into a numpy array
image_array = np.asarray(img)
# Normalize the image
normalized_image_array = (image_array.astype(np.float32) / 127.0) - 1
# Load the image into the array
data[0] = normalized_image_array

# run the inference
prediction = model.predict(data)

for i in prediction :
    if i[0] > 0.7:
        text = "Grade_D"
        color = (0,255,255)
    if i[1] > 0.7:
        text = "Grade_C"
        color = (255,255,0)
    if i[2] > 0.7:
        text = "Grade_B"
        color = (255,0,255)
    if i[3] > 0.7:
        text = "Grade_A"
        color = (200,200,0)

    img = cv2.resize(img,(400,400))
    """ cv2.rectangle(img,(0,0),(224,224),(255,255,0),2) """
    cv2.putText(img,text,(10,30),cv2.FONT_ITALIC,1,color,2)

cv2.imshow('img',img)
cv2.waitKey(0)
    