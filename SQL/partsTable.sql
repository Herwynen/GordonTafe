CREATE TABLE Parts
(
	PartNum INT AUTO_INCREMENT PRIMARY KEY,
    PartName VARCHAR(48), 
    Description VARCHAR(48),  
    Specs VARCHAR(64), 
    OnHand VARCHAR(16), 
    Category VARCHAR(48), 
    Warehouse VARCHAR(32), 
    Price DOUBLE
);