DROP TABLE IF EXISTS owner;
DROP TABLE IF EXISTS driver;
DROP TABLE IF EXISTS partner;
DROP TABLE IF EXISTS truck;

/*create user table*/
CREATE TABLE owner (
    ownerId int NOT NULL AUTO_INCREMENT primary key,
    firstName varchar (50),
    lastName varchar (50),
    address varchar (100),
    email varchar (50),
    phone int,
    partnerId int,
    driverId int,
    truckId int,
    status varchar (20),
    FOREIGN KEY (partnerId) REFERENCES partner(partnerId) ON DELETE CASCADE,
    FOREIGN KEY (driverId) REFERENCES driver(driverId) ON DELETE CASCADE,
    FOREIGN KEY (truckId) REFERENCES truck(truckId) ON DELETE CASCADE
);

/*create driver table*/
CREATE TABLE driver (
    driverId int NOT NULL AUTO_INCREMENT primary key,
    driverType varchar (50),
    truckId int,
    FOREIGN KEY (truckId) REFERENCES truck(truckId) ON DELETE CASCADE
);


/*create partner table*/
CREATE TABLE partner (
    partnerId int NOT NULL AUTO_INCREMENT primary key,
    companyName varchar (50),
    companyPhone int,
    description varchar (255)
);

/*create truck table*/
CREATE TABLE truck (
    truckId int NOT NULL AUTO_INCREMENT primary key,
    truckType varchar (25)

);