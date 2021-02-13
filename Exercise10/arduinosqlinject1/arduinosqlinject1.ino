#include <Ethernet.h>
#include <MySQL_Connection.h> // library for MySQL connection
#include <MySQL_Cursor.h> // library for SQL code execution

byte myMAC[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // Arduino MAC address - every student should have a different one
IPAddress mySQLServer(34,78,59,118); // replace 123,123,123,123 with your MySQL server IP address
EthernetClient client;
MySQL_Connection conn((Client *)&client);

void setup() {
  Serial.begin(9600);
  Serial.println("Connecting...");
  Ethernet.begin(myMAC, mySQLServer);
  do { delay(1000); }
  while (!conn.connect(mySQLServer, 80, "root", "VhFtn4kUqaa6"));
}

void loop() {
  delay(3000);
  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn); // Initiate the query class instance
  cur_mem->execute("INSERT INTO Webservers.sqltable (data1) VALUES ('1234')"); // Execute the query
  delete cur_mem; // Deleting the cursor frees up memory used
}
