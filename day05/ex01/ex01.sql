CREATE TABLE `ft_table` (
    id int(11) NOT NULL AUTO_INCREMENT,
    login varchar(255) NOT NULL,
    group ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL,
    PRIMARY KEY (id)
)