
SET IDENTITY_INSERT [GT].[dbo].[observations] ON;

INSERT INTO [GT].[dbo].[observations] (
    [id],
    [name_ar],
    [name_en],
    [created_at],
    [created_by],
    [updated_at],
    [updated_by],
    [deleted_by],
    [deleted_at]
)
SELECT 
	[id],
    [name_ar],
    [name_en],
    GETDATE() AS [created_at],
    1 AS [created_by],
    [updated_at],
    1 AS [updated_by],
    1 AS [deleted_by],
    [deleted_at]
FROM [gt_real].[dbo].[Observations];

SET IDENTITY_INSERT [GT].[dbo].[observations] OFF;


SET IDENTITY_INSERT [GT].[dbo].[repair_steps] ON;

Insert Into [GT].[dbo].[repair_steps] (
      [id]
      ,[name_ar]
      ,[name_en]
      ,[created_at]
      ,[created_by]
      ,[updated_at]
      ,[updated_by]
      ,[deleted_by]
      ,[deleted_at]
 )

SELECT 
[id],
      [name_ar],
    [name_en],
    GETDATE() AS [created_at]
      ,1 AS [created_by]
      ,[updated_at]
      	  
	   ,CASE 
        WHEN [updated_by] IS NOT NULL THEN '1'
        ELSE NULL
    END AS [updated_by],
	
     CASE 
        WHEN deleted_by IS NOT NULL THEN '1'
        ELSE NULL
    END AS deleted_by
      ,
	  CASE 
        WHEN [deleted_at] IS NOT NULL THEN GETDATE()
        ELSE NULL
    END AS [deleted_at]
	 
  FROM [gt_real].[dbo].[RepairSteps]

  SET IDENTITY_INSERT [GT].[dbo].[repair_steps] OFF;

  SET IDENTITY_INSERT [GT].[dbo].[tire_types] ON;

  Insert into [GT].[dbo].[tire_types] (
  [id],
    [name_ar]
    ,[name_en]
    )

    SELECT
	[id],
    [name_ar]
    ,[name_en]

FROM [gt_real].[dbo].[TireTypes]

SET IDENTITY_INSERT [GT].[dbo].[tire_types] OFF;

SET IDENTITY_INSERT [GT].[dbo].[inspection_transactions] ON;

INSERT INTO [GT].[dbo].[inspection_transactions] (
   [id],
    barcode,
    tire_type_id,
    decision,
    is_repaired,
    building_date,
    machine,
    operator_name,
    operator_code,
    created_at,
    created_by,
    updated_at,
    updated_by,
    deleted_by,
    deleted_at
)
SELECT
   id,
    Barcode,
   TireTypeId ,
    Decision,
    IsRepaired,
     BuildingDate,
    Machine,
    OperatorName,
    OperatorCode,
    GETDATE() AS created_at,
    CASE 
        WHEN created_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS created_by,
    GETDATE() AS updated_at,
    CASE 
        WHEN updated_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS updated_by,
    CASE 
        WHEN deleted_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS deleted_by,
    CASE 
        WHEN deleted_at IS NOT NULL THEN GETDATE() 
        ELSE NULL 
    END AS deleted_at
FROM [gt_real].[dbo].[InspectionTransactions]

SET IDENTITY_INSERT [GT].[dbo].[inspection_transactions] OFF;

-- ---------------------------------------------------------

SET IDENTITY_INSERT [GT].[dbo].[inspection_transaction_observations] ON;

INSERT INTO [GT].[dbo].[inspection_transaction_observations] (
[id],
    inspection_transaction_id,
    observation_id,
    created_at,
    created_by,
    updated_at,
    updated_by,
    deleted_by,
    deleted_at
)
SELECT
id,
    InspectionTransactionId,
   ObservationId,
    GETDATE() AS created_at,
    CASE 
        WHEN created_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS created_by,
    GETDATE() AS updated_at,
    CASE 
        WHEN updated_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS updated_by,
    CASE 
        WHEN deleted_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS deleted_by,
    CASE 
        WHEN deleted_at IS NOT NULL THEN GETDATE() 
        ELSE NULL 
    END AS deleted_at
FROM [gt_real].[dbo].[InspectionTransactionObservations]

SET IDENTITY_INSERT [GT].[dbo].[inspection_transaction_observations] OFF;

SET IDENTITY_INSERT [GT].[dbo].[repair_transactions] ON;

INSERT INTO [GT].[dbo].[repair_transactions]
           (
		   [id],
		   [inspection_transaction_id]
           ,[decision]
           ,[created_at]
           ,[created_by]
           ,[updated_at]
           ,[updated_by]
           ,[deleted_by]
           ,[deleted_at]
		   )
    
	SELECT 
	[id],
      [InspectionTransactionId]
      ,[Decision]
      ,GETDATE() as [created_at]
      ,1 AS [created_by]
	  ,GETDATE() as updated_at
      ,CASE 
        WHEN updated_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS updated_by,
    CASE 
        WHEN deleted_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS deleted_by,
    CASE 
        WHEN deleted_at IS NOT NULL THEN GETDATE() 
        ELSE NULL 
    END AS deleted_at
  FROM [gt_real].[dbo].[RepairTransactions]

SET IDENTITY_INSERT [GT].[dbo].[repair_transactions] OFF;

SET IDENTITY_INSERT [GT].[dbo].[repair_transaction_repair_steps] ON;

INSERT INTO [GT].[dbo].[repair_transaction_repair_steps]
           (
		   [id],
		   [repair_transaction_id]
           ,[repair_step_id]
           ,[created_at]
           ,[created_by]
           ,[updated_at]
           ,[updated_by]
           ,[deleted_by]
           ,[deleted_at]
		   )
     
	 SELECT 
	 [id]
      ,
      [RepairTransactionId]
      ,[RepairStepId]
      ,GETDATE() as [created_at]
      ,1 AS [created_by]
	  ,GETDATE() as updated_at
      ,CASE 
        WHEN updated_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS updated_by,
    CASE 
        WHEN deleted_by IS NOT NULL THEN '1' 
        ELSE NULL 
    END AS deleted_by,
    CASE 
        WHEN deleted_at IS NOT NULL THEN GETDATE() 
        ELSE NULL 
    END AS deleted_at
  FROM [gt_real].[dbo].[RepairTransactionRepairSteps]

  SET IDENTITY_INSERT [GT].[dbo].[repair_transaction_repair_steps] OFF;
