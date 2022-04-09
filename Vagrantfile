Vagrant.configure("2") do |config|

    # Server OFA
    config.vm.define "ofa" do |ofa|
    ofa.vm.hostname = "ofa"
    ofa.vm.provision :shell, path: "ofa.sh"
    ofa.vm.box = "ubuntu/bionic64"
    ofa.vm.network "private_network",ip:"192.168.56.50"
    ofa.vm.provider "virtualbox" do |v|
    v.memory = 1024
    v.cpus = 1
        end
    end

    # Server Landingpage
    config.vm.define "landingpage" do |landingpage|
    landingpage.vm.hostname = "landingpage"
    landingpage.vm.provision :shell, path: "landingpage.sh"
    landingpage.vm.box = "ubuntu/bionic64"
    landingpage.vm.network "private_network",ip:"192.168.56.55"
    landingpage.vm.provider "virtualbox" do |v|
    v.memory = 1024
    v.cpus = 1
            end
        end
    
    # Server Wordpress
    config.vm.define "wordpress" do |wordpress|
    wordpress.vm.hostname = "wordpress"
    wordpress.vm.provision :shell, path: "wordpress.sh"
    wordpress.vm.box = "ubuntu/bionic64"
    wordpress.vm.network "private_network",ip:"192.168.56.60"
    wordpress.vm.provider "virtualbox" do |v|
    v.memory = 1024
    v.cpus = 1
            end
        end

end 
