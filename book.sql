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
