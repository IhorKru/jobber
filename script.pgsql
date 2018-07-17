SELECT DISTINCT(asoffdate) FROM "creditsafe"."bedata" ORDER BY asoffdate DESC;

--count of historical records vs count of unique records
SELECT
    COUNT(accountid) as CNT,
    COUNT(DISTINCT accountid) as DIST_CNT
FROM
    "creditsafe"."bedata"
ORDER BY
    DIST_CNT DESC
LIMIT 100
--delete selected items from the table
DELETE FROM "creditsafe"."ukdata" WHERE asoffdate = '2017-02-01 00:00:00';
SELECT COUNT(id) FROM "creditsafe"."ukdata" WHERE asoffdate = '2017-02-01 00:00:00';
SELECT * FROM "creditsafe"."bedata" LIMIT 1000;

-- count of accounts for different ASOFFDATEs
SELECT asoffdate, count(id) FROM "creditsafe"."bedata" group by asoffdate ORDER BY asoffdate ASC;

-- converting data types
ALTER TABLE "creditsafe"."bedata" 
    ALTER COLUMN dateadded TYPE timestamp without time zone 
    USING dateadded::timestamp(0) without time zone;