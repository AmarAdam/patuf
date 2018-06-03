------------------------------------------------------------
--        Script Postgre 
------------------------------------------------------------



------------------------------------------------------------
-- Table: Field
------------------------------------------------------------
CREATE TABLE public.Field(
	idField        SERIAL  NOT NULL ,
	nameField      VARCHAR (50) NOT NULL ,
	adresseField   VARCHAR (50) NOT NULL  ,
	CONSTRAINT Field_PK PRIMARY KEY (idField)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Type_Team
------------------------------------------------------------
CREATE TABLE public.Type_Team(
	id_type_team   SERIAL NOT NULL ,
	NomType        VARCHAR (50) NOT NULL  ,
	CONSTRAINT Type_Team_PK PRIMARY KEY (id_type_team)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Team
------------------------------------------------------------
CREATE TABLE public.Team(
	idTeam                    SERIAL NOT NULL ,
	nameTeam                  VARCHAR (50) NOT NULL ,
	numbPlayer                INT  NOT NULL ,
	id_type_team              SERIAL NOT NULL ,
	CONSTRAINT Team_PK PRIMARY KEY (idTeam)

	,CONSTRAINT Team_Type_Team_FK FOREIGN KEY (id_type_team) REFERENCES public.Type_Team(id_type_team)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Users
------------------------------------------------------------
CREATE TABLE public.Users(
	idUser              SERIAL NOT NULL ,
	pseudoUser          VARCHAR (50) NOT NULL ,
	ageUser             INT  NOT NULL ,
	emailUser           VARCHAR (50) NOT NULL ,
	idTeam              INT  NOT NULL ,
	CONSTRAINT Users_PK PRIMARY KEY (idUser)

	,CONSTRAINT Users_Team_FK FOREIGN KEY (idTeam) REFERENCES public.Team(idTeam)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Match
------------------------------------------------------------
CREATE TABLE public.Match(
	idMatch             SERIAL NOT NULL ,
	idField             SERIAL NOT NULL ,
	idTeam1             SERIAL NOT NULL ,
	idTeam2             SERIAL NOT NULL ,
	datematch           DATE  NOT NULL ,
	idTeam              INT  NOT NULL ,
	CONSTRAINT Match_PK PRIMARY KEY (idMatch)

	,CONSTRAINT Match_Team_FK FOREIGN KEY (idTeam1) REFERENCES public.Team(idTeam)
	,CONSTRAINT Match_Team0_FK FOREIGN KEY (idTeam2) REFERENCES public.Team(idTeam)
	,CONSTRAINT Match_Field1_FK FOREIGN KEY (idField) REFERENCES public.Field(idField)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Admin
------------------------------------------------------------
CREATE TABLE public.Admin(
	idadmin         SERIAL NOT NULL ,
	pseudoadmin     VARCHAR (50) NOT NULL ,
	passwordadmin   VARCHAR (50) NOT NULL ,
	pseudocrypt     VARCHAR (50) NOT NULL  ,
	CONSTRAINT Admin_PK PRIMARY KEY (idadmin)
)WITHOUT OIDS;






   
   
CREATE OR REPLACE FUNCTION Maj_numbplayer()
	RETURNS trigger AS
$$
BEGIN
    UPDATE Team
	SET numbplayer = numbplayer + 1
	WHERE idteam = NEW.idteam;
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';
CREATE TRIGGER Maj_numbert
    AFTER INSERT ON Users
    EXECUTE PROCEDURE Maj_number();
	

CREATE OR REPLACE FUNCTION Maj_numbplayer_delete()
	RETURNS trigger AS
$$
BEGIN
    UPDATE Team
	SET numbplayer = numbplayer - 1
	WHERE idteam = OLD.idteam;
	RETURN OLD;
END;
$$
LANGUAGE 'plpgsql';
CREATE TRIGGER Maj_number_delete
    AFTER DELETE ON Users
	FOR EACH ROW
    EXECUTE PROCEDURE Maj_numbplayer_delete();





