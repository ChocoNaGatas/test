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
