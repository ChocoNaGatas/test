<<<<<<< HEAD
INSERT INTO 'book' ('call_no', 'title', 'author', 'isbn/issn', 'book_type', 'description', 'book_status', 'editor', 'publisher') 
VALUES ('QA 76 A49', 'Introduksiyon sa agham computer', 'Santiago M. Alviar', '9718781811', 'book', '114 p.', 'on shelf', 'Rachel O. Roxas', 'Quezon City : Sentro ng Wikang Filipino, Sistemang Unibersidad ng Pilipinas'), 
('QA 76.87 M38', 'Mathematical Approaches to Neural Networks', 'Taylor, John Gerald', '0-444-81692-5 ', 'book', '	vii, 382 p. : ill. ', 'on shelf', 'J.G. Taylor', 'Amsterdam : North-Holland');


/*NO EDITOR*/
INSERT INTO 'book' ('call_no', 'title', 'author', 'isbn/issn', 'book_type', 'description', 'book_status', 'publisher') 
VALUES ('QA 76.575 G54', 'Multimedia programming : objects, environments and frameworks', 'Simon J. Gibbs', '0-201-42282-4', 'book', '323 p., [8] p. of plates', 'on shelf', 'Wokingham, England : Addison-Wesley'), 
('QA 76.64 E43', 'Principles of object-oriented software development', 'Eliens, Anton', '0-201-62444-3', '513 p.', 'book', 'on shelf', 'Wokingham, England : Addison-Wesley'), 
('QA 76.76 E95 C37', 'Expert systems : uncertainty and learning', 'E. Castillo, E. Alvarez', '1-85166-66-4', 'book', '	331 p.', 'on shelf', '	Southampton, UK : Computational Mechanics'), 
('QA 76.9 M35 G73', 'Grammar Systems : a grammatical approach to distribution and cooperation', 'Erzsebet Csuhaj-Varju', '2-88124-957-4 ', 'book', '246 p. ', 'on shelf', 'Yverdon, Switzerland : Gordon and Breach Science'),
('QA 76.6 F87', 'Instructor`s manual to accompany fundamentals of computing II', 'Allen B. Tucker ', '0-07-839950-5 ', 'book', '86 p. 1 computer disk. ', 'on shelf', 'New York : McGraw-Hill'),
('QA 76.642 A43', 'Concurrent programming : principles and practice', 'Andrews, Gregory R', '0-8053-0086-4 ', 'book', '637 p. ', 'on shelf', 'Redwood City, Calif. : Benjamin/Cummings'), 
('QA 76.87 N45', 'A practical guide to neural nets', 'Marilyn McCord Nelson', '0-201-63378-7 ', 'book', '328p.', 'on shelf', 'Reading, Mass. : Addison-Wesley'),
('Z 678.93 E93 A42', '	Expert systems for reference and information retrieval', 'Ralph Alberico', '0-88736-232-X ', 'book', '395 p. ', 'on shelf', 'Westport, CT : Meckler'),;

/*NO AUTHOR*/
INSERT INTO 'book' ('call_no', 'title', 'isbn/issn', 'book_type', 'description', 'book_status', 'editor', 'publisher') 
VALUES ('QA 76.76 E95 A3', 'The A1 Workbench BABYLON : an open and portable development environment for expert systems', '0-12-174235-0 ', 'book', '474 p. 2 computer diskettes (3.5) ', 'on shelf', 'Thomas Christaller', 'London : Academic Press'), ('K87 .K56 ', 'Knowledge-based systems and legal applications', '012086441X ', 'book', '369 p. ', 'on shelf', 'T.J.M. Bench-Capon', 'London : Academic Press'),
('QA 76.87 M64', 'Models of Neural Networks III', '0-387-94368-4', 'book', '311 p.', 'on shelf', 'E. Domany', 'New York : Springer'); 

/*NO AUTHOR and NO EDITOR*/
INSERT INTO 'book' ('call_no', 'title', 'isbn/issn', 'book_type', 'description', 'book_status', 'publisher') 
VALUES ('QA 76.64 W55', 'Object-oriented software engineering : the professional developer`s guide', '0-201-62767-1', 'book', '400 p. ', 'on shelf', 'Wokingham, England : Addison-Wesley'),
('QA 76.9 D35 E54', '	Algorithmic properties of structure', 'Engeler, Erwin.', '9-8102-0872-3 ', 'book', '	257 p. ', 'on shelf', 'Singapore : World Scientific');

/*LIBRARIAN*/
INSERT INTO 'librarian' ('username', 'password')
VALUES ('kmbrlymm', 'superchoco');
=======
/* BOOKS WITH NO EDITOR*/
INSERT INTO 'books'('call_no','title','author','isbn/issn','book_type','description','book_status','publisher')
VALUES
('QA76.9 D3 A33 2002','Oracle 9i for Windows handbook','Anand Adkoli','0072190922','book','528 p.','on shelf','New York : McGraw-Hill/Osborne'),
('QA 76.76 E95 N44 2005','Artificial intelligence : a guide to intelligent systems','Michael Negnevitsky','0321204662','book','415 p.','on shelf','Harlow, England : Addison-Wesley'),
('QA 20 C65 P74 1991','Preparing ASEAN for the Information Century','Unesco. Principal Regional Office for Asia and the Pacific','9711050528','book','169 p.','on shelf','Bangkok, Thailand : UNESCO Principal Regional Office for Asia and the Pacific, Bangkok'),
('QA 76 F85 1995','Fundamentals of Computing I','Allen B. Tucker','0070655073','book','228 p.','on shelf','New York : McGraw-Hill'),
('QA 76.76 D47 B45 2001','Schaums outline of UML','Simon Bennett','0077096738','book','360p.','on shelf','New York: McGraw-Hill'),
('QA 76.76 D47 K47 2005','UML demystified','Paul Kimmel','007226182X','book','235p.','on shelf','New York : McGraw-Hill'),
('QA76.9.A43 B47 1997','Fundamentals of sequential and parallel algorithms','Kenneth A. Berman','0534946747','book','744 p.','on shelf','Boston : PWS Pub.'),
('QA 76.9 S88 K45 2005','Systems analysis and design','Kenneth E. Kendall','9812448829','book','726 p.','on shelf','Singapore : Pearson/Prentice Hall'),
('QA 76 H45 1995','Discrete structures, logic and computability','James L. Hein','086720477X','book','866 p.','on shelf','Boston : Jones and Bartlett');


/*BOOKS WITH NO AUTHOR*/
INSERT INTO 'books'('call_no','title','isbn/issn','book_type','description','book_status','editor','publisher')
VALUES
('QA76.87 M64 1996','Models of neural networks III','0387943684','book','311 p.','on shelf','E. Domany','New York : Springer-Verlag'),
('Q 334 I53 1992','Industrial and Engineering Applications of Artificial Intelligence and Expert Systems','354055601X','book','702 p.','on shelf','Fevzi Belli','Berlin: Springer-Verlag'),
('QA 75.5 W67 1992','Computer science logic','3540569928','book','439p.','on shelf','Egon Borger','Berlin :New York : Springer-Verlag'),
('QA 76.64 O223 1994','Object analysis and design : comparison of methods','0471052760','book','212 p.','on shelf','Andrew T.F. Hutt','New York : Wiley'),
('QA 76.9 D32 D37 1993','Database and Expert Systems Applications','3540572341','book','768 p.','on shelf','Vladimir Marik','Berlin : Springer-Verlag'),
('QA 76.9 D3 I56 1993','Foundations of data organization and algorithms','3540573011','book','411 p.','on shelf','David B. Lomet','Berlin : Springer-Verlag');


/*LIBRARIAN/ADMIN*/
INSERT INTO 'librarian'('username','password')
VALUES('jerica','gatasnachoco');
>>>>>>> 03952a6d9c776ec97899823b40ce40554805a031
