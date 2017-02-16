
sudo apt-get install -y php5-cli curl
curl -Ss https://getcomposer.org/installer | php
sudo mv composer.phar /usr/bin/composer

sudo /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024
sudo /sbin/mkswap /var/swap.1
sudo /sbin/swapon /var/swap.1