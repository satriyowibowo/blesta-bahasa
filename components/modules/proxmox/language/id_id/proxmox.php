<?php
/**
 * Language definitions. Generated by the Blesta Translator
 * 
 * @package blesta
 * @version 4.4.0
 * @copyright Copyright (c) 2019, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Proxmox.!actions.boot'] = "Boot";
$lang['Proxmox.!actions.mount_iso'] = "Mount ISO";
$lang['Proxmox.!actions.reinstall'] = "Reinstall";
$lang['Proxmox.!actions.password'] = "Ubah Password";
$lang['Proxmox.!error.user.empty'] = "Masukkan pengguna.";
$lang['Proxmox.!error.password.empty'] = "Masukkan password.";
$lang['Proxmox.!error.host.format'] = "Hostname tampaknya tidak valid.";
$lang['Proxmox.!error.port.format'] = "Masukkan nomor port yang valid.";
$lang['Proxmox.!error.storage.format'] = "Masukkan penyimpanan valid.";
$lang['Proxmox.!error.default_template.format'] = "Masukkan template default yang valid.";
$lang['Proxmox.!error.meta[type].valid'] = "Harap pilih tipe virtualisasi yang valid";
$lang['Proxmox.!error.meta[memory].format'] = "Silakan set RAM.";
$lang['Proxmox.!error.meta[cpu].format'] = "Silakan set vCPU count.";
$lang['Proxmox.!error.meta[hdd].format'] = "Silakan atur ukuran HDD.";
$lang['Proxmox.!error.meta[netspeed].format'] = "Silakan set NetSpeed.";
$lang['Proxmox.!error.meta[set_template].format'] = "Silahkan mengatur template atau untuk mengizinkan klien untuk mengatur template.";
$lang['Proxmox.!error.meta[template].empty'] = "Silakan pilih template.";
$lang['Proxmox.!error.api.internal'] = "Sebuah kesalahan internal terjadi, atau server tidak merespon permintaan tersebut.";
$lang['Proxmox.!error.proxmox_hostname.format'] = "Hostname tampaknya tidak valid.";
$lang['Proxmox.!error.proxmox_template.valid'] = "Silakan pilih template yang valid.";
$lang['Proxmox.!error.create_client.failed'] = "Terjadi error internal dan akun klien tidak dapat dibuat.";
$lang['Proxmox.!error.api.template.valid'] = "Template yang dipilih tidak valid";
$lang['Proxmox.!error.api.confirm.valid'] = "Anda harus mengakui bahwa Anda memahami tindakan ulang untuk melakukan instalasi ulang template";
$lang['Proxmox.!error.proxmox_root_password.matches'] = "Password root tidak cocok.";
$lang['Proxmox.!percent.used'] = "%1\$s%"; // %1$s is a percentage value
$lang['Proxmox.module_row'] = "Proxmox Master Server";
$lang['Proxmox.module_row_plural'] = "Server";
$lang['Proxmox.add_module_group'] = "Tambahkan Server Group";
$lang['Proxmox.manage.module_rows_title'] = "Proxmox Master Servers";
$lang['Proxmox.manage.module_rows_heading.server_label'] = " Label Server";
$lang['Proxmox.manage.module_rows_heading.host'] = "Hostname";
$lang['Proxmox.manage.module_rows_heading.options'] = "Pilihan";
$lang['Proxmox.manage.module_groups_heading.name'] = "Nama Grup";
$lang['Proxmox.manage.module_groups_heading.options'] = "Pilihan";
$lang['Proxmox.manage.module_rows.edit'] = "Mengedit";
$lang['Proxmox.manage.module_rows.delete'] = "Hapus";
$lang['Proxmox.manage.module_groups.delete'] = "Hapus";
$lang['Proxmox.manage.module_rows.confirm_delete'] = "Apakah Anda yakin ingin menghapus server ini?";
$lang['Proxmox.manage.module_groups.confirm_delete'] = "Apakah Anda yakin ingin menghapus grup server ini?";
$lang['Proxmox.manage.module_groups_no_results'] = "Tidak ada kelompok server";
$lang['Proxmox.row_meta.server_name'] = "Label Server";
$lang['Proxmox.row_meta.password'] = "Kata Sandi";
$lang['Proxmox.row_meta.host'] = "Hostname";
$lang['Proxmox.row_meta.default_storage'] = "lokal";
$lang['Proxmox.row_meta.default_vmid'] = "200";
$lang['Proxmox.row_meta.default_port'] = "8006";
$lang['Proxmox.types.kvm'] = "KVM";
$lang['Proxmox.add_row.box_title'] = "Tambahkan Proxmox Server";
$lang['Proxmox.edit_row.box_title'] = "Mengedit Proxmox Server";
$lang['Proxmox.edit_row.basic_title'] = "Pengaturan Dasar";
$lang['Proxmox.edit_row.add_btn'] = "Update Server";
$lang['Proxmox.package_fields.memory'] = "RAM (MB)";
$lang['Proxmox.package_fields.available_nodes'] = "Nodes tersedia";
$lang['Proxmox.service_field.proxmox_hostname'] = "Hostname";
$lang['Proxmox.service_field.proxmox_template'] = "Contoh";
$lang['Proxmox.service_info.proxmox_ip'] = "Primary IP Address";
$lang['Proxmox.tab_actions'] = "Tindakan Server";
$lang['Proxmox.tab_console'] = "Konsol";
$lang['Proxmox.tab_actions.status_running'] = "Online";
$lang['Proxmox.tab_actions.status_disabled'] = "Disabled";
$lang['Proxmox.tab_actions.server_status'] = "Server Status";
$lang['Proxmox.tab_actions.heading_mount_iso'] = "Mount ISO";
$lang['Proxmox.tab_actions.field_reinstall_submit'] = "Instal ulang";
$lang['Proxmox.tab_client_actions.heading_server_status'] = "Server Status";
$lang['Proxmox.tab_client_actions.status_running'] = "On Line";
$lang['Proxmox.tab_client_actions.status_disabled'] = "dinonaktifkan";
$lang['Proxmox.tab_client_actions.field_mount_submit'] = "Mount";
$lang['Proxmox.tab_client_actions.field_template'] = "Template";
$lang['Proxmox.tab_stats.heading_graphs'] = "Grafik";
$lang['Proxmox.tab_client_stats.heading_stats'] = "Statistika";
$lang['Proxmox.tab_console.heading_console'] = "Konsol";
$lang['Proxmox.tab_console.vnc_port'] = "VNC Port:";
$lang['Proxmox.tab_console.vnc_password'] = "VNC Password:";
$lang['Proxmox.tab_client_console.heading_console'] = "Konsol";
$lang['Proxmox.tab_actions.field_password'] = "Root Password";
$lang['Proxmox.tab_client_actions.heading_actions'] = "Tindakan Server ";
$lang['Proxmox.tab_client_console.vnc_ip'] = "VNC host";
$lang['Proxmox.tab_client_console.vnc_user'] = "Username VNC";
$lang['Proxmox.tab_client_console.vnc_password'] = "Password VNC";
?>