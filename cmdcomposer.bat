echo Enregistrement de php.exe dans le chemin syst�me + GIT
set PATH=%PATH%;C:\Users\Adam\Desktop\Ordi sio\UwAmp\bin\php\php-5.5.15;C:\progra~2\Git\bin

echo D�placement dans le dossier du projet microcms
cd C:\Users\gaetan\Desktop\UwAmp\www\Microcms

rem echo Cr�ation de la commande composer.bat (raccourci de php composer.phar)
echo php ressources\composer.phar %%1 > composer.bat

cmd