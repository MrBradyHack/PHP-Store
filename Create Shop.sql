CREATE TABLE IF NOT EXISTS shop (
item_id    INT UNSIGNED NOT NULL AUTO_INCREMENT,
item_name  VARCHAR(20)  NOT NULL,
item_desc  VARCHAR(200) NOT NULL,
item_img   VARCHAR(20)  NOT NULL,
item_price DECIMAL(4.2) NOT NULL,
PRIMARY KEY (item_id));


 // SQL command to populate the table, Examples of different items in the store.

INSERT INTO shop
(item_name, item_desc, item_img, item_price)
VALUES
("Cow"."A friendly field buddy.", "images/cow.png",19.99),
("Cow"."A friendly field buddy.", "images/cow.png",19.99),
("Cow"."A friendly field buddy.", "images/cow.png",19.99),
("Cow"."A friendly field buddy.", "images/cow.png",19.99);