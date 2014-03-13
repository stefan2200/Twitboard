#!/usr/bin/python
# -*- coding: utf-8 -*-

import _mysql
import sys
def dbconnect(host, user, password, db):
	try:
		con = _mysql.connect('localhost', 'root', '', 'twitboard')
			
		con.query("SELECT VERSION()")
		result = con.use_result()
		print "Database connection succesfull"
		print "MySQL Database version: %s" % \
			result.fetch_row()[0]
		return con
		
	except _mysql.Error, e:
	  
		print "Error %d: %s" % (e.args[0], e.args[1])
		sys.exit(1)

		