CREATE TABLE student_results (
  id INT(11) NOT NULL AUTO_INCREMENT,
  student_id VARCHAR(10) NOT NULL,
  name VARCHAR(50) NOT NULL,
  mse_marks1 FLOAT NOT NULL,
  mse_marks2 FLOAT NOT NULL,
  mse_marks3 FLOAT NOT NULL,
  mse_marks4 FLOAT NOT NULL,
  ese_marks1 FLOAT NOT NULL,
  ese_marks2 FLOAT NOT NULL,
  ese_marks3 FLOAT NOT NULL,
  ese_marks4 FLOAT NOT NULL,
  PRIMARY KEY (id)
);
