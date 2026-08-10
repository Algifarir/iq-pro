# Software Requirements Specification
## Part 1: Comprehensive Database Schema

Dokumen ini menjabarkan struktur asli 100% dari 50 tabel database, lengkap dengan tipe data dan aturan kolom, diekstrak langsung dari MySQL.

### Tabel: `master_area`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `area_code` | `varchar(255)` | YES | Default: NULL |
| `area_name` | `varchar(255)` | YES | Default: NULL |
| `area_address` | `varchar(255)` | YES | Default: NULL |
| `area_status` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_engine`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_engine_backup`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | YES | Default: NULL |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `master_engine_temp1`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_engine_temp1_trans`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_engine_temp2`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_engine_temp2_trans`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_image`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `group_tab` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_inspection_back_engine`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_back_engine` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_inspection_front_engine`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_front_engine` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_inspection_left_side`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_left_side` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_inspection_right_side`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_right_side` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_inspection_top_engine`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_top_engine` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_item_inspection`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `item_inspection` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: '' |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_menu`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id_menu` | `int(2)` | NO | AUTO_INCREMENT  |
| `name_menu` | `varchar(100)` | YES | Default: NULL |
| `order_id` | `varchar(2)` | YES | Default: '' |
| `icon` | `varchar(30)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `level` | `varchar(255)` | YES | Default: NULL |
| `type_menu` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id_menu` | - | - | PRIMARY KEY |

---

### Tabel: `master_menu_user`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `id_menu` | `varchar(255)` | YES | Default: NULL |
| `name_menu` | `varchar(255)` | YES | Default: '' |
| `url` | `varchar(255)` | YES | Default: NULL |
| `menu_order` | `varchar(255)` | YES | Default: NULL |
| `level` | `varchar(255)` | YES | Default: NULL |
| `rol_add` | `varchar(255)` | YES | Default: NULL |
| `rol_edit` | `varchar(255)` | YES | Default: NULL |
| `rol_delete` | `varchar(255)` | YES | Default: NULL |
| `rol_view` | `varchar(255)` | YES | Default: NULL |
| `user` | `varchar(255)` | YES | Default: NULL |
| `assigned_menu` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_performance_test`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `description` | `varchar(500)` | YES | Default: '' |
| `rpm` | `varchar(255)` | YES | Default: NULL |
| `max_speed_start` | `varchar(255)` | YES | Default: NULL |
| `max_speed_finish` | `varchar(255)` | YES | Default: NULL |
| `low_speed_start` | `varchar(255)` | YES | Default: NULL |
| `low_speed_finish` | `varchar(255)` | YES | Default: NULL |
| `spec_start` | `varchar(255)` | YES | Default: NULL |
| `spec_finish` | `varchar(255)` | YES | Default: NULL |
| `uom` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: '' |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `operator_math` | `varchar(255)` | YES | Default: NULL |
| `full_consup` | `varchar(255)` | YES | Default: NULL |
| `cylinder` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_type_form`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: '' |
| `form_title` | `varchar(255)` | YES | Default: '' |
| `form_type` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: '' |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `master_user`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `username` | `varchar(255)` | YES | Default: '' |
| `password` | `varchar(255)` | YES | Default: NULL |
| `full_name` | `varchar(255)` | YES | Default: '' |
| `departement` | `varchar(255)` | YES | Default: '' |
| `email` | `varchar(255)` | YES | Default: NULL |
| `level` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `usr_stat` | `varchar(255)` | YES | Default: NULL |
| `rol` | `varchar(255)` | YES | Default: NULL |
| `log_status` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `number_inspection`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `nomor` | `varchar(255)` | YES | Default: NULL |
| `form_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `others_history_log`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `description` | `varchar(255)` | YES | Default: NULL |
| `user` | `varchar(255)` | YES | Default: NULL |
| `id_user_change` | `varchar(255)` | YES | Default: NULL |
| `type_log` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `proses_inspection_detail`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `description` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_no` | `varchar(255)` | YES | Default: NULL |
| `rpm` | `varchar(255)` | YES | Default: NULL |
| `spec_start` | `varchar(255)` | YES | Default: NULL |
| `spec_finish` | `varchar(255)` | YES | Default: NULL |
| `uom` | `varchar(255)` | YES | Default: NULL |
| `hasil_performa_test` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_no` | `varchar(255)` | YES | Default: NULL |
| `group_tab` | `varchar(255)` | YES | Default: NULL |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_no` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `update_item` | `varchar(255)` | YES | Default: '' |
| `dt_proses` | `varchar(255)` | YES | Default: NULL |
| `operator_math` | `varchar(255)` | YES | Default: NULL |
| `full_consup` | `varchar(255)` | YES | Default: NULL |
| `cylinder` | `varchar(255)` | YES | Default: NULL |
| `hasil_f` | `varchar(255)` | YES | Default: NULL |
| `hasil_q` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `proses_inspection_detail_log`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO |  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `description` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_no` | `varchar(255)` | YES | Default: NULL |
| `rpm` | `varchar(255)` | YES | Default: NULL |
| `spec_start` | `varchar(255)` | YES | Default: NULL |
| `spec_finish` | `varchar(255)` | YES | Default: NULL |
| `uom` | `varchar(255)` | YES | Default: NULL |
| `hasil_performa_test` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_no` | `varchar(255)` | YES | Default: NULL |
| `group_tab` | `varchar(255)` | YES | Default: NULL |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_no` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `update_item` | `varchar(255)` | YES | Default: '' |
| `dt_proses` | `varchar(255)` | YES | Default: NULL |
| `operator_math` | `varchar(255)` | YES | Default: NULL |
| `full_consup` | `varchar(255)` | YES | Default: NULL |
| `cylinder` | `varchar(255)` | YES | Default: NULL |
| `hasil_f` | `varchar(255)` | YES | Default: NULL |
| `hasil_q` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `proses_inspection_header`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_date` | `varchar(255)` | YES | Default: NULL |
| `inspection_time` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `faktor_koreksi` | `varchar(255)` | YES | Default: NULL |
| `operator_name` | `varchar(255)` | YES | Default: NULL |
| `ip_number` | `varchar(255)` | YES | Default: NULL |
| `desc_running` | `varchar(255)` | YES | Default: NULL |
| `desc_performance` | `varchar(255)` | YES | Default: NULL |
| `desc_final` | `varchar(255)` | YES | Default: NULL |
| `approve_name` | `varchar(255)` | YES | Default: NULL |
| `created_fname` | `varchar(255)` | YES | Default: NULL |
| `inspection_name` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `final_judgement` | `varchar(255)` | YES | Default: NULL |
| `bln` | `varchar(255)` | YES | Default: NULL |
| `thn` | `varchar(255)` | YES | Default: NULL |
| `user_input` | `varchar(255)` | YES | Default: NULL |
| `inspection_update_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `proses_inspection_header_backup`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_date` | `varchar(255)` | YES | Default: NULL |
| `inspection_time` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `faktor_koreksi` | `varchar(255)` | YES | Default: NULL |
| `operator_name` | `varchar(255)` | YES | Default: NULL |
| `ip_number` | `varchar(255)` | YES | Default: NULL |
| `desc_running` | `varchar(255)` | YES | Default: NULL |
| `desc_performance` | `varchar(255)` | YES | Default: NULL |
| `desc_final` | `varchar(255)` | YES | Default: NULL |
| `approve_name` | `varchar(255)` | YES | Default: NULL |
| `created_fname` | `varchar(255)` | YES | Default: NULL |
| `inspection_name` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `final_judgement` | `varchar(255)` | YES | Default: NULL |
| `bln` | `varchar(255)` | YES | Default: NULL |
| `thn` | `varchar(255)` | YES | Default: NULL |
| `user_input` | `varchar(255)` | YES | Default: NULL |
| `inspection_update_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `proses_inspection_header_log`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO |  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_date` | `varchar(255)` | YES | Default: NULL |
| `inspection_time` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `faktor_koreksi` | `varchar(255)` | YES | Default: NULL |
| `operator_name` | `varchar(255)` | YES | Default: NULL |
| `ip_number` | `varchar(255)` | YES | Default: NULL |
| `desc_running` | `varchar(255)` | YES | Default: NULL |
| `desc_performance` | `varchar(255)` | YES | Default: NULL |
| `desc_final` | `varchar(255)` | YES | Default: NULL |
| `approve_name` | `varchar(255)` | YES | Default: NULL |
| `created_fname` | `varchar(255)` | YES | Default: NULL |
| `inspection_name` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `final_judgement` | `varchar(255)` | YES | Default: NULL |
| `bln` | `varchar(255)` | YES | Default: NULL |
| `thn` | `varchar(255)` | YES | Default: NULL |
| `user_input` | `varchar(255)` | YES | Default: NULL |
| `inspection_update_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `proses_inspection_header_log_backup`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO |  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_date` | `varchar(255)` | YES | Default: NULL |
| `inspection_time` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `faktor_koreksi` | `varchar(255)` | YES | Default: NULL |
| `operator_name` | `varchar(255)` | YES | Default: NULL |
| `ip_number` | `varchar(255)` | YES | Default: NULL |
| `desc_running` | `varchar(255)` | YES | Default: NULL |
| `desc_performance` | `varchar(255)` | YES | Default: NULL |
| `desc_final` | `varchar(255)` | YES | Default: NULL |
| `approve_name` | `varchar(255)` | YES | Default: NULL |
| `created_fname` | `varchar(255)` | YES | Default: NULL |
| `inspection_name` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `final_judgement` | `varchar(255)` | YES | Default: NULL |
| `bln` | `varchar(255)` | YES | Default: NULL |
| `thn` | `varchar(255)` | YES | Default: NULL |
| `user_input` | `varchar(255)` | YES | Default: NULL |
| `inspection_update_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `report_inspection`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `R1` | `varchar(255)` | YES | Default: NULL |
| `R2` | `varchar(255)` | YES | Default: NULL |
| `R3` | `varchar(255)` | YES | Default: NULL |
| `R4` | `varchar(255)` | YES | Default: NULL |
| `R5` | `varchar(255)` | YES | Default: NULL |
| `R6` | `varchar(255)` | YES | Default: NULL |
| `R7` | `varchar(255)` | YES | Default: NULL |
| `R8` | `varchar(255)` | YES | Default: NULL |
| `R9` | `varchar(255)` | YES | Default: NULL |
| `R10` | `varchar(255)` | YES | Default: NULL |
| `R11` | `varchar(255)` | YES | Default: NULL |
| `R12` | `varchar(255)` | YES | Default: NULL |
| `R13` | `varchar(255)` | YES | Default: NULL |
| `P1` | `varchar(255)` | YES | Default: NULL |
| `P2` | `varchar(255)` | YES | Default: NULL |
| `P3` | `varchar(255)` | YES | Default: NULL |
| `P4` | `varchar(255)` | YES | Default: NULL |
| `P5` | `varchar(255)` | YES | Default: NULL |
| `P6` | `varchar(255)` | YES | Default: NULL |
| `P7` | `varchar(255)` | YES | Default: NULL |
| `P8` | `varchar(255)` | YES | Default: NULL |
| `P9` | `varchar(255)` | YES | Default: NULL |
| `P10` | `varchar(255)` | YES | Default: NULL |
| `P11` | `varchar(255)` | YES | Default: NULL |
| `P12` | `varchar(255)` | YES | Default: NULL |
| `P13` | `varchar(255)` | YES | Default: NULL |
| `P14` | `varchar(255)` | YES | Default: NULL |
| `P15` | `varchar(255)` | YES | Default: NULL |
| `P16` | `varchar(255)` | YES | Default: NULL |
| `P17` | `varchar(255)` | YES | Default: NULL |
| `P18` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `tm_report_inspection`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `R1` | `varchar(255)` | YES | Default: NULL |
| `R2` | `varchar(255)` | YES | Default: NULL |
| `R3` | `varchar(255)` | YES | Default: NULL |
| `R4` | `varchar(255)` | YES | Default: NULL |
| `R5` | `varchar(255)` | YES | Default: NULL |
| `R6` | `varchar(255)` | YES | Default: NULL |
| `R7` | `varchar(255)` | YES | Default: NULL |
| `R8` | `varchar(255)` | YES | Default: NULL |
| `R9` | `varchar(255)` | YES | Default: NULL |
| `R10` | `varchar(255)` | YES | Default: NULL |
| `R11` | `varchar(255)` | YES | Default: NULL |
| `R12` | `varchar(255)` | YES | Default: NULL |
| `R13` | `varchar(255)` | YES | Default: NULL |
| `P1` | `varchar(255)` | YES | Default: NULL |
| `P2` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: '' |

---

### Tabel: `transmisi_back_tm`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_back_engine` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_inspection_right_tm`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_right_side` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_area`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `area_code` | `varchar(255)` | YES | Default: NULL |
| `area_name` | `varchar(255)` | YES | Default: NULL |
| `area_address` | `varchar(255)` | YES | Default: NULL |
| `area_status` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_front_tm`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_front_engine` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_image`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `group_tab` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_inspection_left_tm`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_left_side` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_leak_inspection`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `item_inspection` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: '' |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `verifikasi` | `varchar(255)` | YES | Default: NULL |
| `no` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_motoring_inspection`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `item_inspection` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: '' |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `verifikasi` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_top_tm`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_top_engine` | `varchar(255)` | YES | Default: '' |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_transmisi`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_transmisi_backup`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `engine_number` | `varchar(255)` | YES | Default: NULL |
| `engine_name` | `varchar(255)` | YES | Default: NULL |
| `engine_model` | `varchar(255)` | YES | Default: NULL |
| `engine_brand` | `varchar(255)` | YES | Default: NULL |
| `car_name` | `varchar(255)` | YES | Default: '' |
| `engine_suplier` | `varchar(255)` | YES | Default: NULL |
| `engine_area_name` | `varchar(255)` | YES | Default: '' |
| `engine_status` | `varchar(255)` | YES | Default: NULL |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| `material` | `varchar(255)` | YES | Default: NULL |
| `tgl` | `varchar(255)` | YES | Default: NULL |
| `power_type` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_master_type_form`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: '' |
| `form_title` | `varchar(255)` | YES | Default: '' |
| `form_type` | `varchar(255)` | YES | Default: NULL |
| `user_name` | `varchar(255)` | YES | Default: NULL |
| `user_dept` | `varchar(255)` | YES | Default: '' |
| `nama_file` | `varchar(255)` | YES | Default: NULL |
| `url` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_number`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | YES | Default: NULL |
| `number` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `transmisi_problem`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `problem` | `varchar(255)` | YES | Default: NULL |
| `penyebab` | `varchar(255)` | YES | Default: NULL |
| `tindakan` | `varchar(255)` | YES | Default: NULL |
| `status` | `varchar(255)` | YES | Default: NULL |
| `pic` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_proses_inspection_detail`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `description` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_no` | `varchar(255)` | YES | Default: NULL |
| `rpm` | `varchar(255)` | YES | Default: NULL |
| `spec_start` | `varchar(255)` | YES | Default: NULL |
| `spec_finish` | `varchar(255)` | YES | Default: NULL |
| `uom` | `varchar(255)` | YES | Default: NULL |
| `hasil_performa_test` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_no` | `varchar(255)` | YES | Default: NULL |
| `group_tab` | `varchar(255)` | YES | Default: NULL |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_no` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `update_item` | `varchar(255)` | YES | Default: '' |
| `dt_proses` | `varchar(255)` | YES | Default: NULL |
| `operator_math` | `varchar(255)` | YES | Default: NULL |
| `full_consup` | `varchar(255)` | YES | Default: NULL |
| `cylinder` | `varchar(255)` | YES | Default: NULL |
| `hasil_f` | `varchar(255)` | YES | Default: NULL |
| `hasil_q` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| `verifikasi` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_proses_inspection_detail_log`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO |  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `description` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_running_no` | `varchar(255)` | YES | Default: NULL |
| `rpm` | `varchar(255)` | YES | Default: NULL |
| `spec_start` | `varchar(255)` | YES | Default: NULL |
| `spec_finish` | `varchar(255)` | YES | Default: NULL |
| `uom` | `varchar(255)` | YES | Default: NULL |
| `hasil_performa_test` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_pt_no` | `varchar(255)` | YES | Default: NULL |
| `group_tab` | `varchar(255)` | YES | Default: NULL |
| `group_column` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_ok` | `varchar(255)` | YES | Default: NULL |
| `hasil_final_no` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `update_item` | `varchar(255)` | YES | Default: '' |
| `dt_proses` | `varchar(255)` | YES | Default: NULL |
| `operator_math` | `varchar(255)` | YES | Default: NULL |
| `full_consup` | `varchar(255)` | YES | Default: NULL |
| `cylinder` | `varchar(255)` | YES | Default: NULL |
| `hasil_f` | `varchar(255)` | YES | Default: NULL |
| `hasil_q` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| `verifikasi` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `transmisi_proses_inspection_header`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_date` | `varchar(255)` | YES | Default: NULL |
| `inspection_time` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `faktor_koreksi` | `varchar(255)` | YES | Default: NULL |
| `operator_name` | `varchar(255)` | YES | Default: NULL |
| `ip_number` | `varchar(255)` | YES | Default: NULL |
| `desc_running` | `varchar(255)` | YES | Default: NULL |
| `desc_performance` | `varchar(255)` | YES | Default: NULL |
| `desc_final` | `varchar(255)` | YES | Default: NULL |
| `approve_name` | `varchar(255)` | YES | Default: NULL |
| `created_fname` | `varchar(255)` | YES | Default: NULL |
| `inspection_name` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `final_judgement` | `varchar(255)` | YES | Default: NULL |
| `bln` | `varchar(255)` | YES | Default: NULL |
| `thn` | `varchar(255)` | YES | Default: NULL |
| `user_input` | `varchar(255)` | YES | Default: NULL |
| `inspection_update_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| `verifikasi` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

### Tabel: `transmisi_proses_inspection_header_log`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO |  |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_date` | `varchar(255)` | YES | Default: NULL |
| `inspection_time` | `varchar(255)` | YES | Default: NULL |
| `inspection_area` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_number` | `varchar(255)` | YES | Default: NULL |
| `inspection_engine_model` | `varchar(255)` | YES | Default: NULL |
| `faktor_koreksi` | `varchar(255)` | YES | Default: NULL |
| `operator_name` | `varchar(255)` | YES | Default: NULL |
| `ip_number` | `varchar(255)` | YES | Default: NULL |
| `desc_running` | `varchar(255)` | YES | Default: NULL |
| `desc_performance` | `varchar(255)` | YES | Default: NULL |
| `desc_final` | `varchar(255)` | YES | Default: NULL |
| `approve_name` | `varchar(255)` | YES | Default: NULL |
| `created_fname` | `varchar(255)` | YES | Default: NULL |
| `inspection_name` | `varchar(255)` | YES | Default: NULL |
| `inspection_status` | `varchar(255)` | YES | Default: NULL |
| `final_judgement` | `varchar(255)` | YES | Default: NULL |
| `bln` | `varchar(255)` | YES | Default: NULL |
| `thn` | `varchar(255)` | YES | Default: NULL |
| `user_input` | `varchar(255)` | YES | Default: NULL |
| `inspection_update_status` | `varchar(255)` | YES | Default: NULL |
| `sts_data` | `varchar(255)` | YES | Default: NULL |
| `verifikasi` | `varchar(255)` | YES | Default: NULL |

---

### Tabel: `transmisi_upload`
| Kolom | Tipe Data | Nullable | Ekstra |
|---|---|---|---|
| `id` | `int(11)` | NO | AUTO_INCREMENT  |
| `nama_file` | `varchar(255)` | YES | Default: '' |
| `url` | `varchar(255)` | YES | Default: '' |
| `inspection_number` | `varchar(255)` | YES | Default: NULL |
| `form_code` | `varchar(255)` | YES | Default: NULL |
| **(PK)** `id` | - | - | PRIMARY KEY |

---

