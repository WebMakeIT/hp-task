CREATE TABLE customers(
   id INTEGER  NOT NULL PRIMARY KEY
  ,customer_id INTEGER NOT NULL 
  ,date    DATE    NOT NULL
  ,value   DECIMAL(15,2) NOT NULL
  ,currency VARCHAR(3) NOT NULL

);
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (1,1,'2015-04-01','50.00','GBP');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (2,2,'2015-04-01','66.10','USD');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (3,2,'2015-04-02','12.00','EUR');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (4,2,'2015-04-02','6.50','GBP');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (5,1,'2015-04-02','11.04','GBP');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (6,1,'2015-04-02','1.00','EUR');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (7,1,'2015-04-02','23.05','USD');
INSERT INTO customers(id,customer_id,date,value,currency) VALUES (8,2,'2015-04-02','6.50','EUR');
