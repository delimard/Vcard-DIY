# Vcard-DIY
 A project to create your Vcard device

-------

# &#127467;&#127479; Français
### Requis

1. Une carte en plastique, bois ou ce que vous voulez. Vous pouvez imprimer le modele STL fournit dans le dossier STL.
Le format est de 85 x 55mm.
2. Un etiquette NFC-Tag 215 programmable (vous pouvez trouver ca sur amazon facilement)
3. L'application NFCTool disponible sur iOS et Android (https://www.wakdev.com/)
4. Un hebergement web pour heberger votre VCard numerique

### Pas à pas

Imprimez votre carte en 3D. Conseil: en cours d'impression collez votre etiquette et laissez l'imprimante la recouvrir.

Ouvrir le dossier www/
Dans le fichier index.php configurez :
- votre token
- le nom de votre page

Modifiez yourpage.html par le nom choisi, puis ouvrez cette page avec un editeur de code
- Ligne 61: ``var photo`` -> la variable contenant votre photo au format base64. Choisissez la photo qui apparaitra sur votre vcard. Utilisez un encodeur base64 et copiez le code dans cette variable. (https://www.base64-image.de). Attention: le format d'image doit etre de type JPG et il est conseillé d'utiliser une dimensions de 300x300 pixel pour plus de lisiblité.
- ligne 85 à 101 : Editez les variables à votre convenance

Téléchargez les fichiers du dossier www/ sur votre server web

Verifiez que tout fonctionne: https://yourdomain.com/index.php?vcard=yourchoosentoken

Si cela fonctionne il ne vous restera plus qu'a programmer votre Vcard imprimée avec la puce NFC.

Lancez l'application NFC tool.

Choisir ecrire / ajouter un nouvelle enregistrement / enregistrer URL
Entrez l'url que vous avez configuré a l'étape precedente.
Approche votre carte NFC, et cliquez sur Ecrire

Maintenant, prenez voytre smartphone et verifier que le fonctionnement de votre carte.

### Personnalisation

Libre à vous de modifier le code à votre convenance.

J'ai choisi de faire une page html de base (blocs/bootstap/jquery), mais vous pouvez personnaliser facilement.

-------

# &#127482;&#127480; English version

### Requirements

1. A card in plastic or wood or what you want. You can print the STL model provided in the STL folder.
The size is 85 x 55mm.
2. A programmable NFC-Tag 215 (you can find this on amazon easily)
3. The NFCTool application available on iOS and Android (https://www.wakdev.com/)
4. A web hosting to host your digital VCard

### Step by step

Print your card in 3D. Tip: while printing, stick your label and let the printer cover it.

Open the www/ folder
In the index.php file configure :
- your token
- the name of your page

Change yourpage.html to the name you want, then open this page with a code editor
- Line 61: ``var photo`` -> the variable containing your photo in base64 format. Choose the photo that will appear on your vcard. Use a base64 encoder and copy the code into this variable. (https://www.base64-image.de). Attention: the image format must be JPG and it is advised to use a size of 300x300 pixel for more readability.
- line 85 to 101 : Edit the variables at your convenience

Download the files from the www/ folder to your web server

Check that everything works: https://yourdomain.com/index.php?vcard=yourchoosentoken

If it works, you will only have to program your printed Vcard with the NFC chip.

Launch the NFC tool application.

Choose write / add new record / record URL
Enter the url you configured in the previous step.
Approach your NFC card, and click on Write

Now, take your smartphone and check that your card is working.

### Customization

Feel free to modify the code as you wish.

I chose to make a basic html page (blocs/bootstap/jquery), but you can easily customize.

-------
## Donation

author: Delimard Software/ <support@delimard.fr>

<a href="https://www.buymeacoffee.com/delimard" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>
