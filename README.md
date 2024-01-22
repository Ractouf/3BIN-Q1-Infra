Actions sur users:\
-> /etc/skel template des home directory

-> apt-get install sudo\
-> adduser monuser\
-> deluser

-> addgroup mongroupe\
-> delgroup mongroupe

-> sudo usermod -aG sudo admin

-> su monuser

-> générer clés avec puttygen\
-> save la clé privée\
-> copier le contenu de la clé publique /!\ PAS LE FICHIER /!\ \
-> .ssh/authorized_keys

(config de la commande adduser)\
-> /etc/adduser.conf\
-> EXTRA_GROUPS="mongroupe"\
-> DIR_MODE=0700\
-> ADD_EXTRA_GROUPS=1

Apache2 https:\
Site basique en https\
-> Changer le virtualhost\
-> créer un certificat https\
-> a2enmod ssl && systemctl restart apache2\
-> bien a2ensite et reload\
-> check /etc/hosts
-> port forward le 443

ReverseProxy avec l'app en java\
-> adduser jetty\
-> winscp et move siteJetty dans ma home directory\
-> unzip et mv le file vers le user jetty\
-> /!\ Jetty n'a pas les droits sur le fichier /!\ \
-> chown -R jetty siteJetty et chgrp -R jetty siteJetty(-R c'est récursif)\
-> apt-get install default-jdk\
-> java -jar NoDBRunTest.jar &\
-> test sur lynx http://localhost:8080 \
-> a2enmod proxy proxy_http\
-> a2enmod ssl\
-> systemctl restart apache2\
-> Créer certificat https si pas encore fait\
-> créer un VirtualHost pour le site avec un proxy

Docker basics:\
-> apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin\
-> créer un dockerfile\
-> docker build -t test .\
-> docker images\
-> docker run -d -p 8090:80 test (-d pour rendre la main de la console, -p pour port forwarding)\
-> docker ps -a\
-> lynx http://localhost:8090 \
-> docker logs {id container}

-> docker rm/rmi pour retirer container/images\
-> docker rm $(docker ps -a -q)\
-> docker rmi $(docker images -q)

Docker compose basics:\
-> apt-get install docker-compose\
-> créer un docker classique\
-> créer un docker-compose.yml (version, services, volumes)\
-> il faut que le db host et le host de l'application soient les mêmes\
-> docker-compose up -d\
-> docker-composer up --build -d

-> docker-compose down –rmi all –volumes\
-> docker-compose down -v

-> admin pass (default mongo user and password)

Scéance 6:\
-> faire un docker et docker-compose mais avec 3 conteneurs\
-> faire un vhost loadblancer et ajouter dans hosts et a2ensite et reload

-> installer ansible\
-> faire son fichier xxx-playbook.yml\
-> ansible-playbook xxx-playbook.yml\
-> pm2 status

-> pm2 delete all

Roles ansible:\
-> ansible-galaxy init test\
-> dans la dir que le role a crée\
-> aller dans /tasks/main.yml (task générale)\
-> /defaults/main.yml (variable par défaut si pas mentionnées)\
-> en dehors du fichier crée par le role faire un .yml qui définit les vars et roles\
/!\ en haut des 3 fichiers .yml ci-dessus il y a  ---  A NE PAS RETIRER /!\ \
/!\ dans le /tasks/main.yml pas bêtement copier, il faut retirer en haut le taks, gather_facts et hosts /!\

-> faire un .yml obscur\
-> recup la GPG key et l'ajouter avec apt_key\
-> ajouter la repository "deb [arch=amd64] LIEN bookworm stable" /!\ retirer le /gpg a la fin du lien /!\

Terraform basics:\
-> faire les lignes de 13.6.2 du syllabusHTML\
-> faire son main.tf depuis une des images disponible en ligne\
-> terraform init\
-> terraform plan (montrer ce que terraform prévoit de faire)\
-> terraform apply

-> terraform destory
