TYPE=VIEW
query=select `s`.`imie` AS `imie_studenta`,`s`.`nazwisko` AS `nazwisko_studenta`,`u`.`nazwa` AS `nazwa_uczelni` from `lab`.`studenci` `s` join `lab`.`uczelnie` `u` where `s`.`typ_uczel_id` = `u`.`typ_uczel_id`
md5=4aee2cbd9c443225d3049e1890a50fea
updatable=1
algorithm=0
definer_user=lab
definer_host=localhost
suid=2
with_check_option=0
timestamp=2023-03-22 10:42:55
create-version=2
source=SELECT\n S.imie AS imie_studenta,\n S.nazwisko AS nazwisko_studenta,\n U.nazwa AS nazwa_uczelni\nFROM\n studenci S, uczelnie U\nWHERE\n S.typ_uczel_id = U.typ_uczel_id
client_cs_name=cp852
connection_cl_name=cp852_general_ci
view_body_utf8=select `s`.`imie` AS `imie_studenta`,`s`.`nazwisko` AS `nazwisko_studenta`,`u`.`nazwa` AS `nazwa_uczelni` from `lab`.`studenci` `s` join `lab`.`uczelnie` `u` where `s`.`typ_uczel_id` = `u`.`typ_uczel_id`
mariadb-version=100411
