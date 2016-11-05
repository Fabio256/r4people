// EM-18 RFID Reader Module is the one 
//the most commonly used module for Radio 
//Frequency Identification Projects. ... 
//In this tutorial we will see How to Interface EM-18 
//RFID Reader Module with PIC 16F877A Microcontroller. ...
//The EM-18 RFID Reader module generates and radiates RF Carrier ...
//
//
//
//
//
int count = 0;                                          // count = 0
char input[12];                                         // character array of size 12 
boolean flag = 0;                                       // flag =0
void setup()
{
   Serial.begin(9600);                                  // begin serial port with baud rate 9600bps
}
void loop()
{
   if(Serial.available())
   {
      count = 0;
      while(Serial.available() && count < 12)          // Read 12 characters and store them in input array
      {
         input[count] = Serial.read();
         count++;
         delay(5);
      }
      Serial.print(input); 
   }
}
