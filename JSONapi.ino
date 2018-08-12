
#include<string.h>

FILE* tempFile;
FILE* timestamp;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(8, INPUT);

}

void loop() {
  // put your main code here, to run repeatedly:
  int binStatus = digitalRead(8);
  int binId = 1;
  char buff[100] = "";
  int len;
  
  tempFile = fopen("/home/root/server/sample.json", "w");
  timestamp = fopen("/home/root/server/timestamp.txt", "w");
  
  if(tempFile != NULL) {
    if(binStatus){
      fprintf(tempFile, "[{\"bin\":\"%d\", \"status\":\"%s\", \"time\": \"", binId, "FULL");
    } else {
      fprintf(tempFile, "[{\"bin\":\"%d\", \"status\":\"%s\", \"time\": \"", binId, "UNFILLED");
    }
    fclose(tempFile);
    
    system("date | awk '{print $2,$3,$4;}' > /home/root/server/timestamp.txt");
    
    // Determine the filesize of timestamp.txt
    timestamp = fopen("/home/root/server/timestamp.txt","r");
   
    // Read the File
    fgets(buff, sizeof(buff), timestamp);
    
    // Remove newline
    len = strlen(buff);
    buff[len-1] = 0;   
    
    tempFile = fopen("/home/root/server/sample.json", "a");
    fprintf(tempFile, "%s\" } ]", buff);
    
    fclose(timestamp);
    fclose(tempFile);
  }
  delay(1000);
  
}
