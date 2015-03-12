SELECT 
h.hoscode,h.hosname
,(select COUNT(DISTINCT p.HOSPCODE,p.PID) from person p where p.HOSPCODE = h.hoscode
	 AND p.typearea in (1,3)
 ) as 'ประชากรทั้งหมด'
,(select COUNT(DISTINCT p.HOSPCODE,p.PID) from person p where p.HOSPCODE = h.hoscode
   AND p.typearea in (1,3) AND p.RELIGION = 1
  ) as 'นับถือศาสนาพุทธ'
,(select COUNT(DISTINCT p.HOSPCODE,p.PID) from person p where p.HOSPCODE = h.hoscode
   AND p.typearea in (1,3) AND p.RELIGION != 1
  ) as 'นับถือศาสนาอื่นๆ'
 from chospital_amp h
