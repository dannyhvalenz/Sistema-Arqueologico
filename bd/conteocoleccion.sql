DROP TABLE `conteocolecciones`;

CREATE TABLE `conteocolecciones` (
  `idConteo` mediumint,
  `Material` TEXT default NULL,
  `ConteoArti` mediumint default NULL,
  `Colecto` varchar(255) default NULL,
  `Fecha` varchar(255),
  `Hora` varchar(255) default NULL,
  `ObservaConteo` varchar(255) default NULL,
  `IdAnalisisPastas` mediumint default NULL
);

INSERT INTO `conteocolecciones` (`idConteo`,`Material`,`ConteoArti`,`Colecto`,`Fecha`,`Hora`,`ObservaConteo`,`IdAnalisisPastas`) VALUES (3,"nec,",2,"Michelle Swanson","2020-12-06","07:05:00.000000","Omar Wolf",81),(4,"risus.",8,"Kato Langley","1919-07-09","07:05:00.000000","Shelly Harvey",6),(5,"vulputate",8,"Patricia Snider","2020-06-21","05:20:00.000000","Elaine Allen",5),(6,"Nunc",3,"Yuri Garcia","1919-08-16","07:05:00.000000","Justina Palmer",38),(7,"adipiscing",5,"Xantha Marshall","2020-10-17","07:05:00.000000","Vladimir Smith",38),(8,"lacinia",4,"Hanna Combs","1919-07-17","05:20:00.000000","Aaron Deleon",31),(9,"Phasellus",2,"Fredericka Young","2121-01-28","05:20:00.000000","Nathan Harding",71),(10,"pharetra",5,"Henry Gross","1919-10-05","07:05:00.000000","Honorato Cherry",82),(11,"netus",10,"Dale Walter","1919-08-12","05:20:00.000000","Connor Hawkins",28),(12,"interdum",2,"Tobias Gates","2121-01-30","07:05:00.000000","Selma Mayer",39),(13,"arcu.",6,"Sierra Mosley","1919-05-20","07:05:00.000000","Zephania Morgan",48),(14,"dictum",7,"Hop Richards","1919-10-25","05:20:00.000000","April Henderson",58),(15,"quam.",2,"Jemima Ray","1919-09-18","07:05:00.000000","Quyn Crosby",74),(16,"sodales.",5,"Lawrence Young","1919-07-17","05:20:00.000000","Chandler Rios",56),(17,"Duis",7,"Maggie Acosta","1919-11-19","07:05:00.000000","Dominic Gates",77),(18,"tempus",6,"Justin Greer","1919-08-17","05:20:00.000000","Edan Chavez",44),(19,"malesuada",1,"Shafira Branch","2020-09-04","05:20:00.000000","Xander Dixon",29),(20,"Fusce",2,"Garth Dawson","2020-12-08","07:05:00.000000","Flynn Rush",58),(21,"dictum",10,"Rafael Glover","2121-01-14","07:05:00.000000","Howard Mosley",39),(22,"Sed",7,"Keelie Harris","2020-02-23","05:20:00.000000","Brenden Bradley",56),(23,"scelerisque",3,"Hiram Herman","2121-01-20","05:20:00.000000","Destiny Puckett",100),(24,"nisi",9,"Dacey Russell","1919-06-11","07:05:00.000000","Tate Christensen",15),(25,"Morbi",10,"Brynne Rosales","1919-09-17","07:05:00.000000","Hedwig Cote",34),(26,"Cras",7,"Forrest Guy","1919-04-15","07:05:00.000000","Brennan Casey",87),(27,"Aenean",4,"Alexander Willis","2020-05-21","05:20:00.000000","Keefe Vincent",15),(28,"odio.",5,"Trevor Estes","2020-04-19","05:20:00.000000","Patricia Kim",11),(29,"vitae",1,"Alexa Hensley","2020-07-26","07:05:00.000000","Garrett Sanchez",31),(30,"nunc",5,"Sydnee Bennett","1919-05-21","05:20:00.000000","Travis Wyatt",53),(31,"Etiam",6,"Norman Sharp","2020-06-23","07:05:00.000000","Elijah Acevedo",21),(32,"eu",2,"Amaya Raymond","2121-01-01","07:05:00.000000","Micah Drake",74),(33,"nulla",7,"Hop Pugh","1919-11-05","05:20:00.000000","Rama Olson",16),(34,"Etiam",3,"Zachary Stout","2020-04-02","07:05:00.000000","Beck Tran",52),(35,"ac",9,"Ivy Watson","1919-08-31","05:20:00.000000","Donna Moreno",5),(36,"enim",4,"Melissa Tucker","2020-01-09","05:20:00.000000","Nero Wiggins",50),(37,"euismod",8,"Celeste Mckenzie","2020-03-05","05:20:00.000000","Drake Bowman",23),(38,"nec",2,"Aurora Mack","2020-06-12","07:05:00.000000","Cathleen Page",100),(39,"lectus.",8,"William Black","1919-05-24","05:20:00.000000","Ariel Ortiz",43),(40,"ultrices",2,"Nevada Kline","2020-02-05","05:20:00.000000","Maite Patrick",71),(41,"Donec",6,"Moses Mcneil","1919-10-17","07:05:00.000000","Zachery Meyer",52),(42,"Donec",4,"Hilda Robertson","2020-07-17","07:05:00.000000","Finn Vance",92),(43,"non,",2,"Clinton Barrera","2121-02-10","05:20:00.000000","Alan Bright",8),(44,"blandit",4,"Amber Humphrey","1919-05-08","07:05:00.000000","Kim Slater",87),(45,"arcu",4,"Colt Lamb","2020-02-14","05:20:00.000000","Aphrodite Branch",74),(46,"cursus",3,"Macey Powers","2020-04-16","07:05:00.000000","Melodie Nixon",66),(47,"blandit.",4,"Wesley Randall","1919-12-30","07:05:00.000000","Felix Dejesus",82),(48,"at",7,"Carlos Baird","2020-01-18","07:05:00.000000","Jayme Vang",8),(49,"lacus",1,"Bevis Brewer","1919-03-17","07:05:00.000000","Caleb Whitley",65),(50,"molestie",3,"Oliver Raymond","2020-02-03","07:05:00.000000","Samantha Cochran",38),(51,"diam.",4,"Nolan Gutierrez","2020-10-29","07:05:00.000000","Fleur Crosby",18),(52,"et,",2,"Wyoming Kelly","2020-10-28","07:05:00.000000","Ima Hinton",42),(53,"mi",4,"Kiona Hill","1919-11-29","05:20:00.000000","Mallory Baxter",66),(54,"Fusce",10,"Samuel Roberts","1919-05-25","05:20:00.000000","Dawn Brown",68),(55,"tristique",2,"Nadine Nelson","2020-01-11","05:20:00.000000","Blair Meyer",61),(56,"arcu",10,"Asher Sharp","1919-08-17","05:20:00.000000","Jin Oneil",33),(57,"sem.",8,"Kermit Mckenzie","2121-01-01","07:05:00.000000","Yeo West",55),(58,"neque",5,"Flynn Frye","1919-12-31","07:05:00.000000","Devin Crane",39),(59,"dictum",5,"Tatyana Church","2020-08-30","05:20:00.000000","Alan Anderson",60),(60,"sit",5,"Jonas Crawford","2020-03-25","05:20:00.000000","Cameran Powell",65),(61,"quis",9,"Gary Walsh","2121-01-09","05:20:00.000000","Kendall Aguirre",28),(62,"odio,",2,"Valentine Dean","2020-03-05","05:20:00.000000","Rajah Barry",70),(63,"facilisis",9,"Cody Pratt","2020-02-29","07:05:00.000000","Colleen Foley",97),(64,"felis",3,"Malachi Marsh","1919-04-13","05:20:00.000000","Keaton Carver",58),(65,"non",9,"Flavia Nicholson","1919-05-10","07:05:00.000000","Quyn Vaughan",85),(66,"lacus.",10,"Ivan Griffith","2020-07-06","05:20:00.000000","Gisela Haney",30),(67,"Nunc",4,"Jakeem Logan","2020-04-21","07:05:00.000000","Martin Sellers",37),(68,"Proin",2,"Lewis Erickson","1919-10-29","05:20:00.000000","Molly Hurley",87),(69,"pretium",6,"Rahim Franks","2020-10-17","05:20:00.000000","Bryar Blanchard",78),(70,"consectetuer",4,"Damian Foley","1919-05-27","07:05:00.000000","Anthony Sexton",45),(71,"lacus.",8,"Shelly Tanner","2020-05-07","07:05:00.000000","Glenna Bray",37),(72,"mattis.",2,"Hasad Cabrera","2020-06-30","07:05:00.000000","Whitney Compton",23),(73,"lobortis",6,"Abdul Berg","2020-06-16","07:05:00.000000","Ray Wong",32),(74,"fringilla",4,"Rina Morrow","2020-04-28","07:05:00.000000","Keaton Nash",50),(75,"Morbi",3,"Dane Lynch","1919-08-19","07:05:00.000000","Emily Levy",78),(76,"Quisque",10,"Igor Bush","1919-06-18","07:05:00.000000","Nell Wolf",53),(77,"Donec",10,"Serena Stark","2020-01-15","05:20:00.000000","Shelley Hunter",11),(78,"mollis",7,"Elvis Petty","2020-12-10","05:20:00.000000","Lucy Carr",49),(79,"sed",4,"Blake Lowe","1919-10-28","05:20:00.000000","Amber Alvarez",52),(80,"a",1,"Rebekah Kramer","2020-01-10","05:20:00.000000","Cullen Gardner",9),(81,"sed",4,"Rae Reed","1919-03-09","05:20:00.000000","Micah Mejia",99),(82,"Aliquam",5,"Freya Oliver","1919-06-26","05:20:00.000000","Eugenia Sargent",86),(83,"fringilla",10,"Whilemina Castro","2020-02-29","07:05:00.000000","Dylan Guy",54),(84,"rutrum",1,"Malik Hendrix","2020-09-02","07:05:00.000000","Claire Knight",88),(85,"orci",8,"Sybil Haney","1919-12-20","05:20:00.000000","Philip Holt",95),(86,"vulputate,",3,"Lara Gould","2020-09-14","07:05:00.000000","Joel Sandoval",35),(87,"libero.",5,"Dorothy Salas","2020-06-13","07:05:00.000000","Joshua Carpenter",66),(88,"pede",6,"Zelda Moreno","1919-03-20","07:05:00.000000","Matthew Bishop",31),(89,"dolor",1,"Amaya Cannon","2020-11-27","07:05:00.000000","Yasir Langley",19),(90,"justo",5,"Vivian Mccormick","2020-01-12","05:20:00.000000","Dawn Ballard",15),(91,"amet",4,"Patrick Nunez","2020-10-22","05:20:00.000000","Jerome Carson",97),(92,"faucibus",2,"Azalia Dixon","1919-07-20","07:05:00.000000","Hilel Wood",97),(93,"Lorem",4,"Ahmed Mayer","1919-09-18","05:20:00.000000","Maile Walker",43),(94,"parturient",3,"Maia Bird","2020-11-10","05:20:00.000000","Jenna Daniel",78),(95,"mi",1,"Sonia Pickett","2020-04-11","07:05:00.000000","Audra Shelton",57),(96,"erat.",9,"Ezekiel Fleming","2020-05-19","05:20:00.000000","Scott Rivas",9),(97,"molestie",5,"Nomlanga Holland","2020-12-14","05:20:00.000000","Kane Michael",44),(98,"enim",4,"Elizabeth Grimes","2020-12-20","05:20:00.000000","Camille Bryan",16),(99,"Suspendisse",3,"Caesar Snider","1919-07-20","05:20:00.000000","Mercedes Glass",22),(100,"consequat",7,"Anne Cardenas","2020-01-01","05:20:00.000000","Geoffrey Mccormick",74),(101,"aliquet,",3,"Jesse Mercado","2020-01-24","05:20:00.000000","Judith Stephens",32),(102,"Cum",1,"Mira Sanford","2020-08-09","07:05:00.000000","Karly Wiley",46);