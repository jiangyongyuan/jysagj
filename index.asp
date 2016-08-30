<!--#include file="fen123com/Include/Conn.asp"-->
<%
dim HttpUrl,Url
HttpUrl=Request.ServerVariables("SERVER_NAME")
set rs = server.CreateObject ("adodb.recordset")
sql="select * from Booe_Host where Booe_Url='"&HttpUrl&"'"
rs.Open sql,conn,1,1
if not rs.eof then
Title=rs("Booe_Title")
Url=rs("Booe_Url")
Link=rs("Booe_Link")
Look=rs("Booe_Look")
	 If HttpUrl =Url and Look=2 Then
       response.Write"<html><head>"&chr(10)
	   response.Write"<meta http-equiv=Content-Type content=text/html; charset=UTF-8>"&chr(10)
	   response.Write"<title>"&Title&"</title>"&chr(10)
	   response.Write"</head>"&chr(10)
	   response.Write"<frameset cols=* frameborder=NO border=0 framespacing=0>"&chr(10)
	   response.Write"<frame src='"&Link&"'></frameset>"&chr10
	   response.Write"</html>"&chr(10)
	 else 
	   response.Write "<script language=JavaScript>window.location ='"&Link&"'</script>"
	end if
else
Response.Redirect "http://www.fen123.com"
end if
rs.close
set rs=nothing
%>