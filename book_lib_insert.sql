-- SQL file for populating book and librarian tables


-- Insert for books with no editor
-- Book 1-54
INSERT INTO `book`(`call_no`,`title`,`author`,`isbn`,`book_type`,`description`,`book_status`,`publisher`)
VALUES
('QA 76.9 D3 A33 2002','Oracle 9i for Windows handbook','Anand Adkoli','0072190922','book','528 p.','ON SHELF','New York : McGraw-Hill/Osborne'),
('QA 76.76 E95 N44 2005','Artificial intelligence : a guide to intelligent systems','Michael Negnevitsky','0321204662','book','415 p.','ON SHELF','Harlow, England : Addison-Wesley'),
('QA 20 C65 P74 1991','Preparing ASEAN for the Information Century','Unesco. Principal Regional Office for Asia and the Pacific','9711050528','book','169 p.','ON SHELF','Bangkok, Thailand : UNESCO Principal Regional Office for Asia and the Pacific, Bangkok'),
('QA 76 F85 1995','Fundamentals of Computing I','Allen Tucker','0070655073','book','228 p.','ON SHELF','New York : McGraw-Hill'),
('QA 76.76 D47 B45 2001','Schaums outline of UML','Simon Bennett','0077096738','book','360p.','ON SHELF','New York: McGraw-Hill'),
('QA 76.76 D47 K47 2005','UML demystified','Paul Kimmel','007226182X','book','235p.','ON SHELF','New York : McGraw-Hill'),
('QA 76.9.A43 B47 1997','Fundamentals of sequential and parallel algorithms','Kenneth Berman','0534946747','book','744 p.','ON SHELF','Boston : PWS Pub.'),
('QA 76.9 S88 K45 2005','Systems analysis and design','Kenneth Kendall','9812448829','book','726 p.','ON SHELF','Singapore : Pearson/Prentice Hall'),
('QA 76 H45 1995','Discrete structures, logic and computability','James Hein','086720477X','book','866 p.','ON SHELF','Boston : Jones and Bartlett'),
('QA 76.575 G54','Multimedia programming : objects, environments and frameworks','Simon Gibbs','0201422824','book','323 p., [8] p. of plates','ON SHELF','Wokingham, England : Addison-Wesley'), 
('QA 76.64 E43','Principles of object-oriented software development','Anton Eliens', '0201624443','513 p.','book','ON SHELF','Wokingham, England : Addison-Wesley'), 
('QA 76.76 E95 C37','Expert systems : uncertainty and learning','E. Castillo, E. Alvarez','185166664','book','331 p.','ON SHELF','Southampton, UK : Computational Mechanics'), 
('QA 76.9 M35 G73','Grammar Systems : a grammatical approach to distribution and cooperation','Erzsebet Csuhaj-Varju','2881249574','book','246 p.','ON SHELF','Yverdon, Switzerland : Gordon and Breach Science'),
('QA 76.6 F87','Instructors manual to accompany fundamentals of computing II','Allen Tucker','0078399505','book','86 p. 1 computer disk.','ON SHELF','New York : McGraw-Hill'),
('QA 76.642 A43','Concurrent programming : principles and practice','Gregory Andrews','0805300864','book','637 p.','ON SHELF','Redwood City, Calif. : Benjamin/Cummings'), 
('QA 76.87 N45','A practical guide to neural nets','Marilyn McCord Nelson','0201633787','book','328p.','ON SHELF','Reading, Mass. : Addison-Wesley'),
('Z 678.93 E93 A42','Expert systems for reference and information retrieval','Ralph Alberico','088736232X','book','395 p.','ON SHELF','Westport, CT : Meckler'),
('QA 76.642 F67 1995','Designing and building parallel programs','Ian Foster','0201575949','book','xiii, 381 p. : ill. 24 cm','ON SHELF','Reading, Mass. : Addison-Wesley, c1995'), 
('QA 76.642 G76 1994','Using MPI : portable parallel programming','William Gropp, Ewing Lusk, Anthony Skjellum','0262571048','book','xx, 307 p. : ill. 23 cm' ,'ON SHELF','Cambridge, Mass. : MIT Press, c1994'),
('QA 76.642 I33 1992','Programming environments for parallel computing','Nigel Topham, Roland Ibbett, Thomas Bemmerl','044489764X','book','ix, 244 p. : ill. 23 cm' ,'ON SHELF','Amsterdam : North-Holland, 1992'),
('QA 76.642 L47 1993','The art of parallel programming','Bruce Lester','013074980X','book','xxi, 375 p. : ill. 25 cm. 1 computer disk','ON SHELF','Englewood Cliffs, N.J. : Prentice Hall, c1993'),
('QA 76.642 R47 1992','Research Directions in High-Level Parallel Programming Languages','J.B. [i.e. J.P] Banatre, D. Le Metayer (eds.)','3-540-55160-3','book','viii, 387 p. : ill. 25 cm','ON SHELF','Berlin :New York : Springer-Verlag, c1992'),
('QA 76.642 W55 2005','Parallel programming' ,'Barry Wilkinson, Michael Allen' ,'0131405632' ,'book' ,'467 p' ,'ON SHELF'   ,'Upper Saddle River, N.J. : Pearson Prentice Hall, c2005' ),
('QA 76.73 C153 D76 2007','Data structures and algorithms in C++' ,'Adam Drozdek' ,'9789814226776' ,'book' ,'758 p' ,'ON SHELF'   ,'Singapore : Thomson/Course Technology, c2007' ),
('QA 76.73 C153 S69 1994','C++ and C debugging, testing and reliability' ,'David Spuler' ,'0133081729' ,'book' ,'338 p. 1 computer disk (3.5 in)' ,'ON SHELF' ,'Sydney : Prentice Hall, c1994'),
('QA 76.73 J38 W44 2007','Data structures and algorithm analysis in Java' ,'Weiss, Mark Allen' ,'0321373197' ,'book' ,'555 p' ,'ON SHELF'   ,'Boston : Pearson/Addison-Wesley, c2007' ),
('QA 76.73 S67 D37 1997','A guide to SQL standard' ,'C.J. Date','0201964260','book','xxii, 522 p' ,'ON SHELF'   ,'Reading, Mass. : Addison-Wesley, c1997' ),
('QA 76.755 F68 1993','Foundations of Software Technology 13th','R. K. Shyamasundar' ,'3540575294' ,'book' ,'xiv, 453 p' ,'ON SHELF'   ,'Berlin : Springer-Verlag, c1993' ),
('QA 76.755 F68 1992','Foundations of Software Technology 12th','R. Shyamasundar','3540562877','book','xiii, 403 p','ON SHELF','Berlin : Springer-Verlag, c1992' ),
('QA 76.758 A393 1993','Advances in software engineering','Vincenzo Ambriola, Genoveffa Tortora','9810215940','book','189 p','ON SHELF','Singapore : World Scientific, c1993' ),
('QA 76.758 K64 1994','Data structures in Turbo Pascal','Koffman, Elliot B.','0201156245','book','xii, 593 p. ; ill. 24 cm','ON SHELF','Reading, Mass. : Addison-Wesley, c1994' ),
('QA 76.76 E95 B49 1993','Knowledge engineering for information systems','Beynon-Davies, Paul','0077075862','book','171 p','ON SHELF','London : McGraw-Hill, c1993'),
('0-12-178120-8','Maintenance of knowledge-based systems theory','Frans Coenen','0121781208','book','322 p','ON SHELF','London : Academic Press, c1993'),
('QA 76.76 E95 E95 1992','Expert Database Systems','Keith Jeffery','0123822556','book','xiv, 254 p','ON SHELF','London : Academic Press, c1992'),
('QA 76.76 E95 F89 1992','Fuzzy expert systems','Abraham Kandel','084934297X','book','316 p','ON SHELF','Boca Raton : CRC Press, c1992'),
('QA 76.76 E95 G65 1993','The engineering of knowledge-based systems','Avelino J Gonzales','013334293X','book','xx, 523 p. : ill. 25 cm. 2 computer disks','ON SHELF','Englewood Cliffs, N.J.' ),
('QA 76.76 E95 G85 1994','Development of knowledge-based systems','Giovanni Guida','0471928089','book','476 p','ON SHELF','Chichester : WIley, c1994'),
('QA 76.76 E95 H37 1992','Knowledge acquisition for expert systems','Anna Hart','0070269114','book' ,'196 p','ON SHELF','New York : McGraw-Hill, c1992'),
('QA 76.76 E95 H66 1993','Knowledge-based systems for engineers','Adrian Hopgood','0849386160','book','387 p','ON SHELF','Boca Raton, Fl. : CRC Press, 1993'),
('QA 76.758 H46','A book for object oriented knowledge','Brian Henderson-Sellers','4582907890','book','297 p.','ON SHELF','Prentice Hall'),
('QA 76.87 K85','Digital neural networks','Kung Sun Yuan','0673856421','book','444 p.','ON SHELF','Prentice Hall'),
('QA 76.9 H36','Design of hashing algorithms','Josef Pieprzyk','0192837465','book','xiii, 194 p.','ON SHELF','Springer-Verlag'),
('QA 76.76 D47','Object-oriented software engineering: a use case driven approach','Ivar Jacobson','0201544350','book','xx, 524 p.','ON SHELF','Addison-Wesley'),
('QA 76.87 P37','Artificial neural networks: theory and applications','Dan Patterson','0132953536','book','p. cm.','ON SHELF','Prentice Hall'),
('Q 183.9 G35','Walter Gander','Solving problems in scientific computing uisng MAPLE and MATLAB','3540573291','book','xiii, 268 p.','ON SHELF','Springer-Verlag'),
('Q 335 K78','Uncertainty and vagueness in knowledge based systems','R. Kruse','0923092309','book','491 p.','ON SHELF','Springer-Verlag'),
('Q 335 L48','AI and expert systems: a comprehensive guide','Robert Levine','9032903290','book','289 p.','ON SHELF','McGraw-Hill'),
('Q 335 R54','Creating artificial life: self-organization','Edward Rietman','0830641505','book','xvi, 201 p.','ON SHELF','Windcrest/McGraw-Hill'),
('Q 336 T73','Object-oriented artificial intelligence using C++','Kim Tracy','0716782944','book','xx, 468 p.','ON SHELF','Computer Science Press'),
('QA 39.2 D57','Discrete Mathematics','0673462870','John Dossey','book','555 p.','ON SHELF','HarperCollins'),
('QA 39.2 G73','Concrete mathematics: a foundation for computer science','Ronald Graham','0201558025','book','720 p.','ON SHELF','Addison-Wesley'),
('QA 39.2 G75','Discrete and combinational mathematics: an applied introduction','Ralph Grimaldi','0201549832','book','xvi, 874, 149 p.','ON SHELF','Addison-Wesley'),
('QA 39.2 H38','Discrete mathematics','Melvin Hausner','0030032784','book','720 p.','ON SHELF','Saunders College'),
('QA 76.9 D35 E54','Algorithmic properties of structure','Erwin Engeler','9810208723','book','257 p.','ON SHELF','Singapore : World Scientific');


-- Insert for books with no author
-- Book 55-63
INSERT INTO `book`(`call_no`,`title`,`author`,`isbn`,`book_type`,`description`,`book_status`,`editor`,`publisher`)
VALUES
('QA 76.87 M64 1996','Models of neural networks III','[no author]','0387943484','book','311 p.','ON SHELF','E. Domany','New York : Springer-Verlag'),
('Q 334 I53 1992','Industrial and Engineering Applications of Artificial Intelligence and Expert Systems','[no author]','354055601X','book','702 p.','ON SHELF','Fevzi Belli','Berlin: Springer-Verlag'),
('QA 75.5 W67 1992','Computer science logic','[no author]','3540569928','book','439p.','ON SHELF','Egon Borger','Berlin :New York : Springer-Verlag'),
('QA 76.64 O223 1994','Object analysis and design : comparison of methods','[no author]','0471052760','book','212 p.','ON SHELF','Andrew Hutt','New York : Wiley'),
('QA 76.9 D32 D37 1993','Database and Expert Systems Applications','[no author]','3540572341','book','768 p.','ON SHELF','Vladimir Marik','Berlin : Springer-Verlag'),
('QA 76.9 D3 I56 1993','Foundations of data organization and algorithms','[no author]','3540573011','book','411 p.','ON SHELF','David Lomet','Berlin : Springer-Verlag'),
('QA 76.76 E95 A3','The A1 Workbench BABYLON : an open and portable development environment for expert systems','[no author]','0121742350','book','474 p. 2 computer diskettes (3.5)','ON SHELF','Thomas Christaller','London : Academic Press'),
('K87 .K56','Knowledge-based systems and legal applications','[no author]','012086441X ','book','369 p.','ON SHELF','T.J.M. Bench-Capon','London : Academic Press'),
('QA 76.87 M64','Models of Neural Networks III','[no author]','0387943684','book','311 p.','ON SHELF','E. Domany','New York : Springer'); 


-- Insert for books with author and editor
-- Book 64-66
INSERT INTO `book`(`call_no`,`title`,`author`,`isbn`,`book_type`,`description`,`book_status`,`editor`,`publisher`) 
VALUES
('QA 76 A49','Introduksiyon sa agham computer','Santiago Alviar','9718781811','book','114 p.','ON SHELF','Rachel Roxas','Quezon City : Sentro ng Wikang Filipino, Sistemang Unibersidad ng Pilipinas'), 
('QA 76.87 M38','Mathematical Approaches to Neural Networks','John Gerald Taylor','0444816925','book','vii, 382 p. : ill.','ON SHELF','John Gerald Taylor','Amsterdam : North-Holland'),
('Q 334 D38','Neural networks','Eric Davalo','0333549961','book','145 p.','on shelf','A. Rowsthorme','Macmillan');


-- Insert for books with no author and no editor
-- Book 67
INSERT INTO `book`(`call_no`,`title`,`isbn`,`book_type`,`description`,`book_status`,`publisher`) 
VALUES
('QA 76.64 W55','Object-oriented software engineering : the professional developers guide','[no author]','0201627671','book','400 p.','ON SHELF','Wokingham, England : Addison-Wesley');


-- Insert for librarian accounts
-- Librarian 1-4
INSERT INTO `librarian` (`username`, `password`)
VALUES ('kmbrlymm', 'superchoco');

INSERT INTO `librarian` (`username`, `password`)
VALUES('jerica','gatasnachoco');

INSERT INTO `librarian` (`username`, `password`)
VALUES('michael','chocomilk');

INSERT INTO `librarian` (`username`, `password`)
VALUES ('karlo','bearbrand');


-- end of file