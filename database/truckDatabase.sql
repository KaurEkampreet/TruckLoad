DROP TABLE IF EXISTS partner;
DROP TABLE IF EXISTS driver;
DROP TABLE IF EXISTS truck;
DROP TABLE IF EXISTS partner_driver;
DROP TABLE IF EXISTS partner_truck;
DROP TABLE IF EXISTS truck_driver;

/*create partner table*/
CREATE TABLE partner (
    partnerId int NOT NULL AUTO_INCREMENT primary key,
    companyName varchar (50),
    companyPhone int,
    description varchar (255)
);

/*create driver table*/
CREATE TABLE driver (
    driverId int NOT NULL AUTO_INCREMENT primary key,
    driverType varchar (50)
);

/*create truck table*/
CREATE TABLE truck (
    truckId int NOT NULL AUTO_INCREMENT primary key,
    truckType varchar (25)

);

/*create partner-driver table*/
CREATE TABLE partner_driver (
    partnerId int NOT NULL,
    driverId int NOT NULL,
    PRIMARY KEY (partnerId, driverId),
    FOREIGN KEY (partnerId) REFERENCES partner(partnerId) ON DELETE CASCADE,
    FOREIGN KEY (driverId) REFERENCES driver(driverId) ON DELETE CASCADE
);

/*create partner_truck table*/
CREATE TABLE partner_truck (
    partnerId int NOT NULL,
    truckId int NOT NULL,
    PRIMARY KEY (partnerId, truckId),
    FOREIGN KEY (partnerId) REFERENCES partner(partnerId) ON DELETE CASCADE,
    FOREIGN KEY (truckId) REFERENCES truck(truckId) ON DELETE CASCADE
);

/*create truck-driver table*/
CREATE TABLE truck_driver (
    driverId int NOT NULL,
    truckId int NOT NULL,
    PRIMARY KEY (driverId, truckId),
    FOREIGN KEY (driverId) REFERENCES driver(driverId) ON DELETE CASCADE,
    FOREIGN KEY (truckId) REFERENCES truck(truckId) ON DELETE CASCADE
);

/*insert driver types*/
INSERT INTO driver (driverId, driverType) VALUES
(1, 'solo'),
(2, 'solo'),
(3, 'solo'),
(4, 'team'),
(5, 'team');

/*insert truck types*/
INSERT INTO truck (truckId, truckType) VALUES
(1, '53'''),
(2, 'Semi-truck'),
(3, 'Straight-truck'),
(4, 'Flat-Bed');