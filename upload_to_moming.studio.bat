rm jianshu.tar
tar -cvf jianshu.tar plugins themes
.\pscp -C jianshu.tar moming@www.moming.studio:/home/moming/www/typecho/usr
rm jianshu.tar