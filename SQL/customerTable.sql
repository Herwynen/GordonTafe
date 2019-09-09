CREATE TABLE Customer
(
	CustID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName CHAR(15), 
    LastName CHAR(20),
    StreetAddress CHAR(30),
    City CHAR(15),
    State CHAR(3),
    Postcode CHAR(6)
);
