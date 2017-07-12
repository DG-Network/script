#!/bin/bash

if [[ $USER != 'root' ]]; then
	echo "Maaf, Anda harus menjalankan ini sebagai root"
	exit
fi

MYIP=$(wget -qO- ipv4.icanhazip.com)

#vps="dg-network";
vps="dg-network";

if [[ $vps = "dg-network" ]]; then
	source="https://www.raw.githubusercontent.com/DG-Network"
else
	source="https://www.raw.githubusercontent.com/DG-Network"
fi

# go to root
cd

# check registered ip
wget -q -O IP $source/register/master/IP.txt
if ! grep -w -q $MYIP IP; then
   echo "Sorry, hanya IP yang terdaftar yang bisa menggunakan SCRIPT PREMIUM ini!"
	echo "Silahkan Hubungi Admin DG-Network | SoelHadi_Newbie (WhatsApp: 087864334333)"
	rm /root/IP
	exit
fi

disable-user-expire
clear

echo "---------------------------- DAFTAR AKUN SSH EXPIRED ----------------------------"

if [[ $vps = "dg-network" ]]; then
	lolcat -F 0.3 -S 0 /root/dg-network
fi

echo ""

cat /root/expireduser.txt | boxes -d columns | lolcat
echo ""

rm /root/IP