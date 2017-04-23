# Nasa-Apps-2017
This is a project that can predict the richter scale value of upcoming earthquake by analyzing the acceleration of primary wave of earthquake (that has high frequency and acceleration but not destructive). It will also alert the people earlier (depends on the place away from the epicenter) before the destructive wave of the earthquake hits their area. The data will also be preserved on server for farther scientific research.

P_wave_detection: here is the code that will be used to detect the non destructive and faster P wave for early warning. The sensor used is GY-521 which has MPU6050 IC. In reallife implementatioin we are suggesting to use NASA's realtime earthquake sensor array for more accurate detection.

heart_beat_detection: here we are using pulse rate monitor sensor to measure pulse rates of people which will connect to a smartphone via bluetooth. our idea is to provide this sensor as wristband which the users will need to wear after seeing the alert in the mobile app. this wristband will connect to smartphone via bluetooth which will upload the location of the survivor in the cloud. this valueable information will be used for post earthquake rescue mission's resource management and rescue planning.

Eq_ResQ: this is the website associated with our system. this will show all the recent earthquake locations and other informations like Richter scale value, RMS speed, number of causulties etc. there will also be option for donating for recent earthquakes.

local server: there will be a dedicated local server in each zone.They 
