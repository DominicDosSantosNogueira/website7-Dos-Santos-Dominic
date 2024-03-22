create or replace database Website;
use Website;

-- Create the 'users' table
CREATE TABLE users (
    UserId int not null auto_increment primary key,
    username VARCHAR(255) unique,
    password_hash VARCHAR(255),
    location VARCHAR(255),
    UserRole VARCHAR(25)
);

-- Insert data into the 'users' table



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


CREATE TABLE translations(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Identifier VARCHAR(255),
    English VARCHAR(255),
    French VARCHAR(255)
);



INSERT INTO translations (Identifier, English, French)
VALUES
('Productflec', 'The best Transformation market out there', 'Le meilleur marché de la transformation'),
('Productfind', 'You wont find these transformations anywhere else', 'Vous ne trouverez pas ces transformations ailleurs'),
('about_description', 'In this enterprise we sell most of the new achievable transformations.', 'Dans cette entreprise nous vendons la plupart des transformations réalisables.'),
('Aboutupdates', 'Updates', 'Mise a jour'),
('Aboutupdates1', 'Be aware that some outdated transformations may leave the market and new ones may be added.', 'Sachez que certaines transformations obsolètes peuvent quitter le marché et que de nouvelles peuvent être ajoutées.'),
('Aboutupdates2', 'Be aware that some outdated transformations may leave the market and new ones may be added.', 'Sachez que certaines transformations obsolètes peuvent quitter le marché et que de nouvelles peuvent être ajoutées.'),
('ContactLocation', 'Location', 'Emplacement'),
('ContactEmail', 'Send email for support', 'Envoyer un email pour le support'),
('ContactPhone', 'Phone number: 420 690 007', 'Numéro de téléphone:420 690 007'),
('ProductBuy', 'Buy', 'Acheter'),
('Product_title', 'Products', 'Produits'),
('about_title', 'About', 'Sur'),
('ui_title', 'UI', 'UI'),
('contact_title', 'Contact', 'Contact'),
('Contactplace', 'Jojo Land', 'Pays Jojo'),
('Login/Register', 'Login/Register', 'Connecter/Enregistrer'),
('members_title', 'Members', 'Membres'),
('members_name', 'Name', 'Nom'),
('members_position', 'Position', 'Position'),
('members_Email', 'Email', 'courriel'),
('Add_product', 'Add Product', 'Ajouter Produit'),
('Product_Name', 'Product Name:', 'Nom de produit:'),
('Add_product_price', 'Price:', 'Prix:'),
('Add_product_png', 'Only PNG images are allowed.', 'Seulement des images png sont autorisées.'),
('Add_product_error', 'Error uploading the image.', 'Erreur en enregistron l\'image.'),
('Add_Product_Success', 'Product added successfully!', 'Ajoutation du produit success!'),
('Login_type_username', 'Type your username:', 'Tapez votre nom d\'utilisateur:'),
('Login_type_password', 'Type your password:', 'Tapez votre mot de passe:'),
('Login_again', 'Type the same password again:', 'Tapez le meme mot de passe:'),
('Login_button', 'Login', 'Connecter'),
('Register_button', 'Register', 'Enregistrer'),
('Country_residence', 'Please choose your country of residence:', 'Veuillez choisir votre pays de résidence:'),
('Login', 'Login', 'Enregistrement');




