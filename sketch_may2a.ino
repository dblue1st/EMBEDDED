#include <DHT.h>
#include <ESP8266WebServer.h>
#include <WiFiClient.h>
#include <ESP8266WiFi.h>
#include "index.h"
//#include <html.htm>


#define chandht 5
#define loaidht DHT11


const String tenwifi = "DBlue";
const String mkwifi = "duoc3010";
// const String tenwifi = "KTX-H8";
// const String mkwifi = "1phut30giay";

DHT dht(chandht, loaidht);
ESP8266WebServer server(80);

float nhietdo;
float doam;

void ketnoi(){
  String s = MAIN_page;
  server.send(200,"text/html",s);
}
void getdomain(){
  String nameDomain = "<span id=domain></span><script>document.getElementById('domain').innerHTML = window.location.hostname;</script>";
  server.send(200,"text/html",nameDomain);
}
void docdulieunhietdo(){
  nhietdo = dht.readTemperature();
  String item = String(nhietdo);
  Serial.print("nhiet do: ");
  Serial.println(nhietdo);
  if(isnan(nhietdo)){
    server.send(404,"text/plain","Cam bien khong hoat dong");
  }else {
    server.send(200,"text/plain",item);
  }
}

void docdulieudoam(){
  doam = dht.readHumidity();
  String item = String(doam);
  Serial.print("do am: ");
  Serial.println(doam);
  if(isnan(doam)){
    server.send(404,"text/plain","Cam bien khong hoat dong");
  }else {
    server.send(200,"text/plain",item);
  }
}

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);

  pinMode(chandht,INPUT);
  dht.begin();

  Serial.println("");
  Serial.print("Ket noi wifi ");
  Serial.println(tenwifi);
  WiFi.begin(tenwifi,mkwifi);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println();
  Serial.print("Connected, IP address: ");
  Serial.println(WiFi.localIP());

  server.on("/",ketnoi);
  server.on("/getdomain",getdomain);
  server.on("/docnhietdo",docdulieunhietdo);
  server.on("/docdoam",docdulieudoam);
  server.begin();
}

void loop() {
  // put your main code here, to run repeatedly:
  server.handleClient();

}
