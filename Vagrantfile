@script = <<SCRIPT
rm -rf /var/www/html
ln -s /vagrant/public_html /var/www/html
cd /vagrant && composer --no-progress --prefer-dist install
SCRIPT

Vagrant.configure("2") do |config|
    # Ubuntu 18.04 - Bionic Beaver
    config.vm.define "ubuntu18" do |ubuntu18|
        ubuntu18.vm.box = "trsenna/gozma18"
        ubuntu18.vm.hostname = "local-wp"
        ubuntu18.vm.network "private_network", ip: "192.168.27.18"
        # provisioners
        ubuntu18.vm.provision 'shell', inline: @script, privileged: false
        # post-install message (vagrant console)
        ubuntu18.vm.post_up_message = "App URL: http://gozma18.local"
    end
end
