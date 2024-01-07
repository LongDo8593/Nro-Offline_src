?><?php
echo base64_decode('LS0tLS1Ub29sIEVuY29kZSBCeSBNWFQtLS0tLQ==');
sleep(2);
?><?php
error_reporting(0);
session_start();
system('clear');
sleep(1);
while (true){
echo "\033[1;92m      __  __          _____
     | |       
     | |    |
     | |    |
     | | _  |
     |_ _ | \_____/\n";
echo "\033[1;96m[1] SetUp\n";
echo "\033[1;932m[2] Run server\n"; /// Link Key Đã tạo ở shrtfly.com
echo "\033[1;96m[3] Mở Online\n";
echo "\033[1;92mLua chon: \033[1;33m";
      $luachon = trim(fgets(STDIN));
    if ($luachon == 1)  {
    sleep(1);
  //system('pkg install openjdk-17 -y -y && wget -O mad.zip  https://github.com/Mad-Neko/backup1/blob/main/mad.zip?raw=true && unzip mad.zip && clear ');
  system('pkg install openjdk-17 -y -y && wget -O src.zip  https://github.com/KhanhNguyen9872/Nro-Offline_src/blob/main/src.zip?raw=true && unzip src.zip && clear ');
system('rm -rf src.zip');
system('clear');
    
    sleep(1);
       continue;
    } else if ($luachon == 2)  {
    sleep(1);
        while (true){
$checkkey  = file('https://note1s.net/note/CaHCjA812x7u'); //// Linh Key
echo "\033[1;96mLưu Ý Khi nào sai key thì vào link lấy lại\n";
echo "\033[1;93mLink lấy key:\033[1;91m https://stfly.xyz/6m1MG\n"; /// Link Key Đã tạo ở shrtfly.com
echo "\033[1;92mNhập Key Để Chạy Server: \033[1;33m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0])  {
    sleep(1);
        echo "\033[1;35mKey Dúng Đang chạy server\n";
system('java -Xms2G  -Xmx2G -jar dist/mad.jar');
        break;
    } else {
        echo "\033[1;91mKey Sai Vui Lòng Lấy Lại\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
       }
}
        break;
    } else {
        echo "\033[1;91mChon Sai Vui Lòng Chọn Lại\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
    } else if ($luachon == 3)  {
    sleep(1);
         #!/bin/bash

echo "Lựa chọn cài ngrok và tự mở port 14445"
echo "----------------------------------------"

# Kiểm tra nếu ngrok đã được cài đặt
if ! command -v ngrok &> /dev/null
then
    echo "Ngrok chưa được cài đặt trên hệ thống của bạn"
    read -p "Nhấn Enter để tiến hành cài đặt..."
    
    # Tải xuống và cài đặt ngrok
    sudo wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip
    sudo unzip ngrok-stable-linux-amd64.zip -d /usr/local/bin
    sudo rm ngrok-stable-linux-amd64.zip
    
    echo "Ngrok đã được cài đặt thành công"
fi

# Kiểm tra nếu port 14445 đang được sử dụng
if ! lsof -i :14445 &> /dev/null
then
    echo "Port 14445 chưa được sử dụng"
    
    # Mở port 14445
    ngrok tcp 14445 > /dev/null &
    
    echo "Port 14445 đã được mở"
else
    echo "Port 14445 đã được sử dụng bởi ứng dụng khác"
fi

         
