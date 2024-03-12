create or replace database Website;
use Website;

-- Create the 'users' table
CREATE TABLE users (
    username VARCHAR(255),
    password_hash VARCHAR(255),
    location VARCHAR(255)
);

-- Insert data into the 'users' table
INSERT INTO users (username, password_hash)
VALUES
('post', '$2y$10$rWaGz1/ocmtvtoF1Z/t8f.bPYXVIKJ3Q.qcgYghfLBn1O3qQQj0v2'),
('Timmy', '$2y$10$EnEoeGm9l1Fo.tnaVpxuLurvu2EhZbxghMvgNhDgKkrwP0ckf4BPO'),
('Dominc', '$2y$10$mJY.9q7rjnoZBfq90mzvvOdzKQ3t0WxrfD3BZqzf1i8HW0gV142Oq');



-- Create the 'products' table
CREATE TABLE products (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255),
    English_Description VARCHAR(255),
    French_Description VARCHAR(255),
    Price DECIMAL(10, 2),
    Image VARCHAR(255)
);

-- Insert data into the 'products' table
INSERT INTO products (Name, English_Description, French_Description, Price, Image)
VALUES
('Ultra Instinct', 'Gives you a white Aura and allows you to dodge everything', 'Te donne une aura blanche qui te permet de esquiver tout', 10000, 'UI.png'),
('Super Sayian', 'Makes your hair glow yellow and increases your strength', 'Met tes cheveux en jaune et augmente ta force', 6000, 'ssj1.jpg'),
('Super Sayian 4', 'Makes you go into a super sayian with Ozaru power and red monkey fur', 'Te permet d\'utiliser super sayan avec la force d\'ozaru et de donner de peu rouge', 8000, 'ssj4.png'),
('Ozaru', 'Lets you transform into a giant monkey with massive power', 'Te permet de te transformer en macaque géant avec un pouvoir gigantesque', 3000, 'ozaru.png'),
('Beast', 'Makes your hair white and absurdly long', 'Blanchis tes cheveux et te donne des cheveux de longueur absurde', 30000, 'Beast.png'),
('Genkidama', 'Big blue ball', 'Grande balle bleue', 9000, 'Genki.png');

