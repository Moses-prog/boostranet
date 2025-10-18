{ pkgs, ... }: {
  # Which nixpkgs channel to use.
  channel = "stable-24.05"; # or "unstable"

  # Use https://search.nixos.org/packages to find packages
  packages = [
    pkgs.php82
    pkgs.php82Packages.composer
    pkgs.nodejs_20
    pkgs.mysql80
    pkgs.sudo
  ];

  # Sets environment variables in the workspace
  env = {};

  # Search for services https://search.nixos.org/options
  # Sets services up in your workspace
  services = {
    mysql = {
      enable = true;
      package = pkgs.mysql80;
    };
  };

  # Adds commands to shell init
  start = {
    mysql = {
      command = "services.mysql.start";
      description = "Starts the MySQL server.";
    };
  };
}
# Trigger rebuild
