#define heartbeat_sensor_pin 0

int maximum_value = 0;
int minimum_value = 1024;

int heartbeat = 0;
boolean rising = true;

unsigned long initial_time;

void setup() {
  Serial.begin(9600);
  delay(100);
  Serial.println("calibrating...");
  calibration();
  Serial.println("done calibration");
  initial_time= millis();
}

void loop() {
  if((millis()-initial_time)> 15000){
    heartbeat = heartbeat * 4;
    if(Serial) Serial.println(heartbeat);
    heartbeat = 0;
    initial_time = millis();
  }

  int a = analogRead(heartbeat_sensor_pin);

  if( (a > (maximum_value - (maximum_value - minimum_value) * .66)) && rising){
    heartbeat++;
    rising = false;
  }

  else if( a < ( minimum_value +(maximum_value - minimum_value) * .33)){
    rising = true;
  }
}

void calibration() {
  int a = analogRead(heartbeat_sensor_pin);
  initial_time = millis();
  while ((millis() - initial_time) < 15000) {
  a = analogRead(heartbeat_sensor_pin);
    if (a > maximum_value)
      maximum_value = a;
    if (a < minimum_value)
      minimum_value = a;
  }
}

