CREATE TABLE Vulkaan
(
     Id                       INT            UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Naam                     VARCHAR(250)               NOT NULL
    ,Hoogte                   INT            UNSIGNED    NOT NULL
    ,Land                     VARCHAR(250)               NOT NULL
    ,JaarLaatsteUitbarsting   VARCHAR(250)               NOT NULL
    ,AantalSlachtoffers       INT            UNSIGNED    NOT NULL
    ,IsActief                 BIT                        NOT NULL        DEFAULT 1
    ,Opmerking                VARCHAR(255)                   NULL        DEFAULT NULL
    ,DatumAangemaakt          DATETIME(6)                NOT NULL
    ,DatumGewijzigd           DATETIME(6)                NOT NULL
    ,CONSTRAINT               PK_Zangeres_Id             PRIMARY KEY     (Id)
) ENGINE=InnoDB;

INSERT INTO Vulkaan
(
      Naam
     ,Hoogte
     ,Land
     ,JaarLaatsteUitbarsting
     ,AantalSlachtoffers
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
  ('Eyjafjallajökul', 1666, 'IJsland', '2010', 1, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Vesuvius', 1281, 'Italië', '1944', 26, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Sakurajima', 1117, 'Japan', '2012', 2, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Merapi', 2910, 'Indonesië', '2020', 5, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Nyiragongo', 3470, 'Democratische Republiek Congo', '2021', 15, 1, NULL, SYSDATE(6), SYSDATE(6));