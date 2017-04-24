# Nasa-Apps-2017
This is a project that can predict the richter scale value of upcoming earthquake by analyzing the acceleration of primary wave of earthquake (that has high frequency and acceleration but not destructive). It will also alert the people earlier (depends on the place away from the epicenter) before the destructive wave of the earthquake hits their area. The data will also be preserved on server for farther scientific research.


### P_wave_detection:
here is the code that will be used to detect the non destructive and faster P wave for early warning. The sensor used is GY-521 which has MPU6050 IC. In reallife implementatioin we are suggesting to use NASA's realtime earthquake sensor array for more accurate detection.

### heart_beat_detection: 
here we are using pulse rate monitor sensor to measure pulse rates of people which will connect to a smartphone via bluetooth. our idea is to provide this sensor as wristband which the users will need to wear after seeing the alert in the mobile app. this wristband will connect to smartphone via bluetooth which will upload the location of the survivor in the cloud. this valueable information will be used for post earthquake rescue mission's resource management and rescue planning.

### Eq_ResQ:
this is the website associated with our system. this will show all the recent earthquake locations and other informations like Richter scale value, RMS speed, number of causulties etc. there will also be option for donating for recent earthquakes.

### local server:
there will be a dedicated local server in each zone.They will collect data directly from the sensors connected to them. they will also generate a warning message based on the past data available to them and send to it's zone. the local servers will aslo be connected to each other so that one zone can alert the adjacent zones. after estimating the epicenter and the Richter scale value the local servers will also estimate the spread of the earthquake and alert all those zones.

### the app:
the app has two unique features.
              1. if you install it and create an account with it, you'll be notified about any recent earthquakes and will be given the                    ability to donate to their rescue from around the world. the medium between you and the affected people will be UNO.
              2. if you have the app in your phone and the wristband connected with heartrate sensor then you'll be notified if there is                    any eartquake near your position and what should you do. the app will offer you suggestions based on the actual danger                    level of the earthquake so that you don't panic. it will aslo recieve the heartrate data from your wristband and upload                    it to cloud coupled with your GPS location so that the rescue team can know where you are and also have good idea about                    your medical condition. so they will be able to make the best use of the resources availabe to them. this will translate                  into saving more lives than relying on the guessing method that is currently being used. 
