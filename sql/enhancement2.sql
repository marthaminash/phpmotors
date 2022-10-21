INSERT INTO clients (clientFirstName, clientLastName, clientEmail,clientPassword, clientComment)
VALUES ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman');

UPDATE clients SET clientLevel = '3' WHERE clientFirstName= 'Tony' and clientLastName = 'Stark';

UPDATE inventory set invDescription = REPLACE(invDescription, 'small interior', 'spacious interior') WHERE invMake = 'GM' AND invModel = 'Hummer';

SELECT inventory.invModel,carclassification.classificationName
FROM inventory INNER JOIN carclassification
ON inventory.classificationId = carclassification.classificationId
WHERE carclassification.classificationName = 'SUV';

DELETE FROM inventory WHERE inventory.invMake = 'Jeep'AND inventory.invModel = 'Wrangler';

UPDATE inventory SET invImage = CONCAT('/phpmotors', invThumbnail);