#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


CREATE TABLE Medias(
        idMedia   int (11) Auto_increment  NOT NULL ,
        MediaType Enum ("Sound","Image") NOT NULL ,
        Name      Varchar (150) NOT NULL ,
        Path      Varchar (150) NOT NULL ,
        PRIMARY KEY (idMedia ) ,
        UNIQUE (Path )
)ENGINE=InnoDB;

