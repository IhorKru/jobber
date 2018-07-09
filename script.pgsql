SELECT DISTINCT(asoffdate) FROM "creditsafe"."ukdata" ORDER BY asoffdate DESC;

--count of historical records vs count of unique records
SELECT
    COUNT(accountid) as CNT,
    COUNT(DISTINCT accountid) as DIST_CNT
FROM
    "creditsafe"."ukdata"
--delete selected items from the table
DELETE FROM "creditsafe"."ukdata" WHERE asoffdate = '2017-02-01 00:00:00';
SELECT COUNT(id) FROM "creditsafe"."ukdata" WHERE asoffdate = '2017-02-01 00:00:00';
SELECT * FROM "creditsafe"."ukdata" LIMIT 1000;