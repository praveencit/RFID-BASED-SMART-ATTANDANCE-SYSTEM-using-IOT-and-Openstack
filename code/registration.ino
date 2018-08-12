#include <SPI.h>
#include <RFID.h>
#include "pitches.h"
#include <Ethernet.h>
#include <LiquidCrystal.h>

byte mac[] = { 0x98, 0x4F, 0xEE, 0x01, 0xCD, 0x61 };
byte ip[] = {192,168,0.34 }; // Direction ip local

RFID rfid(10,9);
//LCD address and type declaration
//LiquidCrystal lcd(12,11,5,4,3,2);
int data;
byte serNum[5];




void setup(){ 
  Serial.begin(9600);
  Ethernet.begin(mac, ip); //Initiation ethernet shield
  delay(1000); // Waiting 1 second after initializing
  //lcd.begin(16, 2);
  //lcd.clear();
  //lcd.print(Ethernet.localIP());
  Serial.print("My IP address: ");
  Serial.println(Ethernet.localIP());

  Serial.begin(9600); // Serial communication initialization
  SPI.begin(); // SPI communication initialization
  rfid.init(); // RFID module initialization
  //lcd.begin(16, 2);
  // lcd.clear();
 //lcd.print("Waiting");
  Serial.println("Waiting for Card");
   // iterate over the notes of the melody:
 
}
void loop() {
  // put your main code here, to run repeatedly:
   if (rfid.isCard()){ // valid card found
        //tone(8,2000,500);
        //delay(1000);
       // Serial.print("hello");
        if (rfid.readCardSerial()){ // reads the card 
       
          // Serial.println(rfid.readCardSerial());
           data = rfid.serNum[0]; // stores t'he serial number
    
      Serial.print("cardnumber:");
  
     Serial.println(data);
       
      //lcd.setCursor(0,1);
    //lcd.print("Card number:");
    //lcd.print(data);
      //lcd.clear();
     //noTone(8);
    }  
    
     Serial.println("Waiting for Card");
//lcd.print("Waiting");
  //client.stop();
  delay(1000);

}
}
